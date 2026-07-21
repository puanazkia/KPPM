<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    public function index(Request $request)
    {
        $filters = [
            'anggaran' => $request->input('budget'),
            'cat' => $request->input('unit'),
            'activity' => $request->input('activity'),
            'tahun' => $request->input('tahun'),
            'nama_pengadaan' => $request->input('nama_pengadaan'),
            'nomor_kontrak' => $request->input('nomor_kontrak'),
        ];

        // 1. Mengambil data master (distinct) dari tabel kpdev.mart_procurement_summary
        $progresses = DB::table('kpdev.mart_procurement_summary')
            ->select('nama_program')
            ->distinct()
            ->whereNotNull('nama_program')
            ->orderBy('nama_program')
            ->get();

        $budgets = DB::table('kpdev.mart_procurement_summary')
            ->select('anggaran')
            ->distinct()
            ->whereNotNull('anggaran')
            ->orderBy('anggaran')
            ->get();

        $units = DB::table('kpdev.mart_procurement_summary')
            ->select('category')
            ->distinct()
            ->whereNotNull('category')
            ->orderBy('category')
            ->get();

        $activities = DB::table('kpdev.mart_procurement_summary')
            ->select('activity')
            ->distinct()
            ->whereNotNull('activity')
            ->orderBy('activity')
            ->get();

        $tahuns = DB::table('kpdev.mart_procurement_summary')
            ->select('tahun')
            ->distinct()
            ->whereNotNull('tahun')
            ->orderBy('tahun', 'desc')
            ->get();

        // 2. Data Cascading Filter untuk nama_pengadaan & nomor_kontrak dari kpdev.mart_procurement_summary
        $namaPengadaansQuery = DB::table('kpdev.mart_procurement_summary')
            ->select('nama_pengadaan as title')
            ->distinct()
            ->whereNotNull('nama_pengadaan');

        if (!empty($filters['anggaran'])) {
            $namaPengadaansQuery->where('anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $namaPengadaansQuery->where('category', $filters['cat']);
        }
        if (!empty($filters['tahun'])) {
            $namaPengadaansQuery->where('tahun', $filters['tahun']);
        }
        if (!empty($filters['activity'])) {
            $namaPengadaansQuery->where('activity', $filters['activity']);
        }
        if (!empty($filters['nomor_kontrak'])) {
            $namaPengadaansQuery->where('nomor_kontrak', $filters['nomor_kontrak']);
        }
        $namaPengadaans = $namaPengadaansQuery->orderBy('nama_pengadaan')->get();

        $nomorKontraksQuery = DB::table('kpdev.mart_procurement_summary')
            ->select('nomor_kontrak as doc_number')
            ->distinct()
            ->whereNotNull('nomor_kontrak');

        if (!empty($filters['anggaran'])) {
            $nomorKontraksQuery->where('anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $nomorKontraksQuery->where('category', $filters['cat']);
        }
        if (!empty($filters['tahun'])) {
            $nomorKontraksQuery->where('tahun', $filters['tahun']);
        }
        if (!empty($filters['activity'])) {
            $nomorKontraksQuery->where('activity', $filters['activity']);
        }
        if (!empty($filters['nama_pengadaan'])) {
            $nomorKontraksQuery->where('nama_pengadaan', $filters['nama_pengadaan']);
        }
        $nomorKontraks = $nomorKontraksQuery->orderBy('nomor_kontrak')->get();

        // 3. Card Statistik Tahapan Pengadaan dari tabel kpdev.mart_procurement_card
        $procurementStages = [
            'dok_juskeb' => ['3101', '2101'],
            'permintaan_pengadaan' => ['3104', '2104'],
            'dok_finance' => ['3102', '2102'],
            'pembuatan_rks' => ['3202', '2202'],
            'rapat_penjelasan' => ['3204', '2204'],
            'evaluasi_proposal' => ['3207', '2207'],
            'pembuatan_hps' => ['3205', '2205'],
            'negoisasi' => ['3208', '2208'],
            'penetapan' => ['3301', '2301'],
            'dokumen_kontrak' => ['3401', '2401'],
            'kontrak' => ['3403', '2403', '5403'],
        ];

        $latestStagesBase = DB::table('kpdev.mart_procurement_card')
            ->selectRaw("DISTINCT ON (nama_pengadaan) nama_pengadaan, kd_prockon, tg_actual_finish, tg_plan_finish")
            ->whereNotNull('nama_pengadaan')
            ->orderBy('nama_pengadaan')
            ->orderByRaw('tg_actual_finish DESC NULLS LAST')
            ->orderBy('kd_prockon', 'desc');

        if (!empty($filters['anggaran'])) {
            $latestStagesBase->where('anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $latestStagesBase->where('cat', $filters['cat']);
        }
        if (!empty($filters['activity'])) {
            $latestStagesBase->where('activity', $filters['activity']);
        }
        if (!empty($filters['tahun'])) {
            $latestStagesBase->where('tahun', $filters['tahun']);
        }
        if (!empty($filters['nama_pengadaan'])) {
            $latestStagesBase->where('nama_pengadaan', $filters['nama_pengadaan']);
        }
        if (!empty($filters['nomor_kontrak'])) {
            $latestStagesBase->where('nomor_kontrak', $filters['nomor_kontrak']);
        }

        $sql = $latestStagesBase->toSql();
        
        $groupedData = DB::table(DB::raw("({$sql}) as latest"))
            ->mergeBindings($latestStagesBase)
            ->selectRaw("kd_prockon, COUNT(*) as cnt, AVG(DATE_PART('day', tg_actual_finish::timestamp - tg_plan_finish::timestamp)) as avg_dur")
            ->groupBy('kd_prockon')
            ->get();

        $groupedMap = [];
        foreach ($groupedData as $row) {
            $groupedMap[$row->kd_prockon] = [
                'count' => $row->cnt,
                'avg_dur' => $row->avg_dur
            ];
        }

        $stageStats = [];
        foreach ($procurementStages as $key => $codes) {
            $count = 0;
            $totalDur = 0;
            $durCount = 0;

            foreach ($codes as $code) {
                if (isset($groupedMap[$code])) {
                    $count += $groupedMap[$code]['count'];
                    if ($groupedMap[$code]['avg_dur'] !== null) {
                        $totalDur += $groupedMap[$code]['avg_dur'] * $groupedMap[$code]['count'];
                        $durCount += $groupedMap[$code]['count'];
                    }
                }
            }
            
            $avgDays = $durCount > 0 ? abs(round($totalDur / $durCount)) : 0;
            
            $stageStats[$key] = [
                'count' => $count,
                'avg_days' => $avgDays
            ];
        }

        // 4. Data Tabel Dinamis dari kpdev.mart_procurement_summary
        $tableDataQuery = DB::table('kpdev.mart_procurement_summary')
            ->select(
                'nama_pengadaan',
                'category',
                'pola',
                'perikatan',
                'durasi',
                'max_finish'
            );

        if (!empty($filters['anggaran'])) {
            $tableDataQuery->where('anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $tableDataQuery->where('category', $filters['cat']);
        }
        if (!empty($filters['activity'])) {
            $tableDataQuery->where('activity', $filters['activity']);
        }
        if (!empty($filters['tahun'])) {
            $tableDataQuery->where('tahun', $filters['tahun']);
        }
        if (!empty($filters['nama_pengadaan'])) {
            $tableDataQuery->where('nama_pengadaan', $filters['nama_pengadaan']);
        }
        if (!empty($filters['nomor_kontrak'])) {
            $tableDataQuery->where('nomor_kontrak', $filters['nomor_kontrak']);
        }

        $perPage = (int)$request->input('per_page', 5);
        if (!in_array($perPage, [5, 10, 25, 50])) {
            $perPage = 5;
        }

        $tableData = $tableDataQuery
            ->orderByDesc('max_finish')
            ->paginate($perPage)
            ->withQueryString();

        // 5. Data Chart Jumlah Pengadaan (Category & Pola) dari kpdev.mart_procurement_summary
        $chartDataRawQuery = DB::table('kpdev.mart_procurement_summary')
            ->select('category', 'pola', DB::raw('count(DISTINCT nama_pengadaan) as total'))
            ->whereNotNull('category');
        
        if (!empty($filters['anggaran'])) {
            $chartDataRawQuery->where('anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $chartDataRawQuery->where('category', $filters['cat']);
        }
        if (!empty($filters['activity'])) {
            $chartDataRawQuery->where('activity', $filters['activity']);
        }
        if (!empty($filters['tahun'])) {
            $chartDataRawQuery->where('tahun', $filters['tahun']);
        }
        if (!empty($filters['nama_pengadaan'])) {
            $chartDataRawQuery->where('nama_pengadaan', $filters['nama_pengadaan']);
        }
        if (!empty($filters['nomor_kontrak'])) {
            $chartDataRawQuery->where('nomor_kontrak', $filters['nomor_kontrak']);
        }

        $chartDataRaw = $chartDataRawQuery->groupBy('category', 'pola')->get();

        $chartCategories = $chartDataRaw->pluck('category')->unique()->values()->all();
        $chartSeriesNames = $chartDataRaw->whereNotNull('pola')->pluck('pola')->unique()->values()->all();
        
        $chartSeries = [];
        foreach ($chartSeriesNames as $polaName) {
            $data = [];
            foreach ($chartCategories as $cat) {
                $row = $chartDataRaw->first(function($value) use ($cat, $polaName) {
                    return $value->category === $cat && $value->pola === $polaName;
                });
                $data[] = $row ? (int)$row->total : 0;
            }
            $chartSeries[] = [
                'name' => $polaName ?: 'N/A',
                'data' => $data
            ];
        }
        
        $cleanedCategories = array_map(function($cat) {
            return str_replace([' CATEGORY', ' OPERATION'], '', $cat);
        }, $chartCategories);

        // 5b. Total Pengadaan per Unit dari kpdev.mart_procurement_summary
        $totalPerUnitRawQuery = DB::table('kpdev.mart_procurement_summary')
            ->select('category', DB::raw('COUNT(DISTINCT nama_pengadaan) as total'))
            ->whereNotNull('category');

        if (!empty($filters['anggaran'])) {
            $totalPerUnitRawQuery->where('anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $totalPerUnitRawQuery->where('category', $filters['cat']);
        }
        if (!empty($filters['activity'])) {
            $totalPerUnitRawQuery->where('activity', $filters['activity']);
        }
        if (!empty($filters['tahun'])) {
            $totalPerUnitRawQuery->where('tahun', $filters['tahun']);
        }
        if (!empty($filters['nama_pengadaan'])) {
            $totalPerUnitRawQuery->where('nama_pengadaan', $filters['nama_pengadaan']);
        }
        if (!empty($filters['nomor_kontrak'])) {
            $totalPerUnitRawQuery->where('nomor_kontrak', $filters['nomor_kontrak']);
        }

        $totalPerUnitRaw = $totalPerUnitRawQuery->groupBy('category')->get();

        $totalPerUnit = [];
        foreach ($chartCategories as $cat) {
            $row = $totalPerUnitRaw->first(fn($v) => $v->category === $cat);
            $totalPerUnit[] = $row ? (int)$row->total : 0;
        }

        // 6. Data Chart Rata-Rata Hari Pengadaan Terhadap Unit
        // Menggunakan tabel kpdev.mart_procurement_diagram_rata-rata jika TIDAK ADA filter
        // Jika ADA filter, dikalkulasi dari kpdev.mart_procurement_summary
        $hasActiveFilters = !empty($filters['anggaran']) || !empty($filters['cat']) || !empty($filters['activity']) || !empty($filters['tahun']) || !empty($filters['nama_pengadaan']) || !empty($filters['nomor_kontrak']);

        if (!$hasActiveFilters) {
            $diagramRataRataRaw = DB::table('kpdev.mart_procurement_diagram_rata-rata')->get();
            $avgDurations = [];
            foreach ($chartCategories as $cat) {
                $row = $diagramRataRataRaw->first(fn($v) => $v->category === $cat);
                $avgDurations[] = $row ? round((float)$row->avg_durasi) : 0;
            }
        } else {
            $avgDurationRawQuery = DB::table('kpdev.mart_procurement_summary')
                ->selectRaw('category, AVG(durasi) as avg_durasi')
                ->whereNotNull('category');

            if (!empty($filters['anggaran'])) {
                $avgDurationRawQuery->where('anggaran', $filters['anggaran']);
            }
            if (!empty($filters['cat'])) {
                $avgDurationRawQuery->where('category', $filters['cat']);
            }
            if (!empty($filters['activity'])) {
                $avgDurationRawQuery->where('activity', $filters['activity']);
            }
            if (!empty($filters['tahun'])) {
                $avgDurationRawQuery->where('tahun', $filters['tahun']);
            }
            if (!empty($filters['nama_pengadaan'])) {
                $avgDurationRawQuery->where('nama_pengadaan', $filters['nama_pengadaan']);
            }
            if (!empty($filters['nomor_kontrak'])) {
                $avgDurationRawQuery->where('nomor_kontrak', $filters['nomor_kontrak']);
            }

            $avgDurationRaw = $avgDurationRawQuery->groupBy('category')->get();

            $avgDurations = [];
            foreach ($chartCategories as $cat) {
                $row = $avgDurationRaw->first(fn($value) => $value->category === $cat);
                $avgDurations[] = $row ? round((float)$row->avg_durasi) : 0;
            }
        }

        // 7. Proses Export ke Excel dari kpdev.mart_procurement_summary
        if ($request->has('export') && $request->input('export') == '1') {
            $exportQuery = DB::table('kpdev.mart_procurement_summary')
                ->select(
                    'nama_pengadaan',
                    'nama_program',
                    'category',
                    'pola',
                    'perikatan',
                    'anggaran',
                    'activity',
                    'tahun',
                    'nomor_kontrak',
                    'vendor',
                    'durasi',
                    'max_finish'
                );

            if (!empty($filters['anggaran'])) {
                $exportQuery->where('anggaran', $filters['anggaran']);
            }
            if (!empty($filters['cat'])) {
                $exportQuery->where('category', $filters['cat']);
            }
            if (!empty($filters['activity'])) {
                $exportQuery->where('activity', $filters['activity']);
            }
            if (!empty($filters['tahun'])) {
                $exportQuery->where('tahun', $filters['tahun']);
            }
            if (!empty($filters['nama_pengadaan'])) {
                $exportQuery->where('nama_pengadaan', $filters['nama_pengadaan']);
            }
            if (!empty($filters['nomor_kontrak'])) {
                $exportQuery->where('nomor_kontrak', $filters['nomor_kontrak']);
            }

            $exportData = $exportQuery->orderByDesc('max_finish')->get();

            $fileName = 'procurement_data_' . date('Y-m-d_H-i-s') . '.xlsx';
            $tempPath = sys_get_temp_dir() . '/' . $fileName;

            $options = new \OpenSpout\Writer\XLSX\Options();
            $writer = new \OpenSpout\Writer\XLSX\Writer($options);
            $writer->openToFile($tempPath);

            $headerStyle = (new \OpenSpout\Common\Entity\Style\Style())
                ->setFontBold()
                ->setBackgroundColor('D9EAD3');
            $subHeaderStyle = (new \OpenSpout\Common\Entity\Style\Style())
                ->setFontBold()
                ->setBackgroundColor('F3F3F3');

            // Sheet 1: Informasi Filter
            $sheet1 = $writer->getCurrentSheet();
            $sheet1->setName('Informasi Filter');
            
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['INFORMASI FILTER'], $headerStyle));
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Parameter', 'Nilai'], $subHeaderStyle));
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Tahun', $filters['tahun'] ?: 'Semua']));
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Budget', $filters['anggaran'] ?: 'Semua']));
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Unit', $filters['cat'] ?: 'Semua']));
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Activity', $filters['activity'] ?: 'Semua']));
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Nama Pengadaan', $filters['nama_pengadaan'] ?: 'Semua']));
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Nomor Kontrak', $filters['nomor_kontrak'] ?: 'Semua']));
            
            // Sheet 2: Statistik Tahapan (Jumlah Kegiatan Saat Ini & Durasi Rata-rata)
            $writer->addNewSheetAndMakeItCurrent();
            $sheet2 = $writer->getCurrentSheet();
            $sheet2->setName('Statistik Tahapan');

            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Tahapan', 'Total Kegiatan', 'Rata-Rata Durasi (Hari)'], $headerStyle));
            
            $stageNames = [
                'dok_juskeb' => 'Dok Juskeb',
                'permintaan_pengadaan' => 'Permintaan Pengadaan',
                'dok_finance' => 'Dok Finance',
                'pembuatan_rks' => 'Pembuatan RKS',
                'rapat_penjelasan' => 'Rapat Penjelasan',
                'evaluasi_proposal' => 'Evaluasi Proposal',
                'pembuatan_hps' => 'Pembuatan HPS',
                'negoisasi' => 'Negoisasi',
                'penetapan' => 'Penetapan',
                'dokumen_kontrak' => 'Dokumen Kontrak',
                'kontrak' => 'Kontrak',
            ];

            foreach ($stageNames as $key => $name) {
                $count = $stageStats[$key]['count'] ?? 0;
                $avg = $stageStats[$key]['avg_days'] ?? 0;
                $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues([$name, $count, $avg]));
            }

            // Sheet 3: Rata-Rata Hari Terhadap Unit
            $writer->addNewSheetAndMakeItCurrent();
            $sheet3 = $writer->getCurrentSheet();
            $sheet3->setName('Rata-Rata Hari per Unit');

            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Unit / Kategori', 'Rata-Rata Hari Pengadaan'], $headerStyle));
            
            foreach ($cleanedCategories as $index => $category) {
                $avg = $avgDurations[$index] ?? 0;
                $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues([$category, $avg]));
            }

            // Sheet 4: Jumlah Pengadaan Terhadap Unit
            $writer->addNewSheetAndMakeItCurrent();
            $sheet4 = $writer->getCurrentSheet();
            $sheet4->setName('Jumlah Pengadaan per Unit');

            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues(['Unit / Kategori', 'Jumlah Pengadaan'], $headerStyle));
            
            foreach ($cleanedCategories as $index => $category) {
                $total = $totalPerUnit[$index] ?? 0;
                $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues([$category, $total]));
            }

            // Sheet 5: Data Detail Pengadaan (Detailed Cycle Time Data)
            $writer->addNewSheetAndMakeItCurrent();
            $sheet5 = $writer->getCurrentSheet();
            $sheet5->setName('Detailed Cycle Time Data');

            $columns = ['No', 'Nama Pengadaan', 'Nama Program', 'Kategori', 'Pola', 'Perikatan', 'Anggaran', 'Activity', 'Tahun', 'Nomor Kontrak', 'Vendor', 'Durasi (Hari)', 'Max Finish'];
            $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues($columns, $headerStyle));

            foreach ($exportData as $index => $row) {
                $writer->addRow(\OpenSpout\Common\Entity\Row::fromValues([
                    $index + 1,
                    $row->nama_pengadaan ?? '-',
                    $row->nama_program ?? '-',
                    $row->category ?? '-',
                    $row->pola ?? '-',
                    $row->perikatan ?? '-',
                    $row->anggaran ?? '-',
                    $row->activity ?? '-',
                    $row->tahun ?? '-',
                    $row->nomor_kontrak ?? '-',
                    $row->vendor ?? '-',
                    $row->durasi !== null ? round($row->durasi) : '-',
                    $row->max_finish ?? '-'
                ]));
            }

            $writer->close();

            if (ob_get_length()) { ob_end_clean(); }
            
            return response()->download($tempPath, $fileName, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ])->deleteFileAfterSend(true);
        }

        if ($request->ajax()) {
            $tableHtml = view('partials.procurement_table', compact('tableData'))->render();
            return response()->json([
                'stageStats' => $stageStats,
                'chartData' => [
                    'categories' => $cleanedCategories,
                    'qtyData' => $totalPerUnit,
                    'avgDurData' => $avgDurations
                ],
                'tableHtml' => $tableHtml
            ]);
        }

        $selectedTahun = $filters['tahun'];

        return view('procurement', compact(
            'progresses', 
            'budgets', 
            'units', 
            'activities', 
            'namaPengadaans', 
            'nomorKontraks',
            'tahuns',
            'stageStats',
            'selectedTahun',
            'tableData',
            'cleanedCategories',
            'chartSeries',
            'avgDurations',
            'totalPerUnit'
        ));
    }
}
