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
        
        $applyFilters = function($query) use ($filters) {
            $query->where('kpdev.mart_procdash.nama_program', 'not iLike', '%KHS%')
                  ->where('kpdev.mart_procdash.nama_pengadaan', 'not iLike', '%KHS%');

            if (!empty($filters['anggaran'])) {
                $query->where('kpdev.mart_procdash.anggaran', $filters['anggaran']);
            }
            if (!empty($filters['cat'])) {
                $query->where('kpdev.mart_procdash.cat', $filters['cat']);
            }
            if (!empty($filters['activity'])) {
                $query->where('kpdev.mart_procdash.activity', $filters['activity']);
            }
            if (!empty($filters['tahun'])) {
                $query->where('kpdev.mart_procdash.tahun', $filters['tahun']);
            }
            if (!empty($filters['nama_pengadaan'])) {
                $query->where('kpdev.mart_procdash.nama_pengadaan', $filters['nama_pengadaan']);
            }
            if (!empty($filters['nomor_kontrak'])) {
                $query->whereIn('kpdev.mart_procdash.nama_pengadaan', function($sub) use ($filters) {
                    $sub->select('title')
                        ->from('kpdev.mart_procdash_saving')
                        ->where('doc_number', $filters['nomor_kontrak']);
                });
            }
            return $query;
        };

        $applyFiltersForCards = function($query) use ($filters) {
            $query->where('kpdev.mart_procdash.nama_program', 'not iLike', '%KHS%')
                  ->where('kpdev.mart_procdash.nama_pengadaan', 'not iLike', '%KHS%');

            if (!empty($filters['anggaran'])) {
                $query->where('kpdev.mart_procdash.anggaran', $filters['anggaran']);
            }
            if (!empty($filters['cat'])) {
                $query->where('kpdev.mart_procdash.cat', $filters['cat']);
            }
            if (!empty($filters['tahun'])) {
                $query->where('kpdev.mart_procdash.tahun', $filters['tahun']);
            }
            if (!empty($filters['nama_pengadaan'])) {
                $query->where('kpdev.mart_procdash.nama_pengadaan', $filters['nama_pengadaan']);
            }
            if (!empty($filters['nomor_kontrak'])) {
                $query->whereIn('kpdev.mart_procdash.nama_pengadaan', function($sub) use ($filters) {
                    $sub->select('title')
                        ->from('kpdev.mart_procdash_saving')
                        ->where('doc_number', $filters['nomor_kontrak']);
                });
            }
            if (!empty($filters['activity'])) {
                $query->whereIn('kpdev.mart_procdash.nama_pengadaan', function($sub) use ($filters) {
                    $sub->select('nama_pengadaan')
                        ->from('kpdev.mart_procdash')
                        ->where('activity', $filters['activity'])
                        ->where('nama_program', 'not iLike', '%KHS%')
                        ->where('nama_pengadaan', 'not iLike', '%KHS%');
                });
            }
            return $query;
        };

        // 1. Mengambil data master (distinct) dari kpdev.mart_procdash
        $progresses = DB::table('kpdev.mart_procdash')
            ->select('nama_program')
            ->distinct()
            ->whereNotNull('nama_program')
            ->where('nama_program', 'not iLike', '%KHS%')
            ->where('nama_pengadaan', 'not iLike', '%KHS%')
            ->orderBy('nama_program')
            ->get();

        $budgets = DB::table('kpdev.mart_procdash')
            ->select('anggaran')
            ->distinct()
            ->whereNotNull('anggaran')
            ->where('nama_program', 'not iLike', '%KHS%')
            ->where('nama_pengadaan', 'not iLike', '%KHS%')
            ->orderBy('anggaran')
            ->get();

        $units = DB::table('kpdev.mart_procdash')
            ->select('cat as category')
            ->distinct()
            ->whereNotNull('cat')
            ->where('nama_program', 'not iLike', '%KHS%')
            ->where('nama_pengadaan', 'not iLike', '%KHS%')
            ->orderBy('cat')
            ->get();

        $activities = DB::table('kpdev.mart_procdash')
            ->select('activity')
            ->distinct()
            ->whereNotNull('activity')
            ->where('nama_program', 'not iLike', '%KHS%')
            ->where('nama_pengadaan', 'not iLike', '%KHS%')
            ->orderBy('activity')
            ->get();

        $tahuns = DB::table('kpdev.mart_procdash')
            ->select('tahun')
            ->distinct()
            ->whereNotNull('tahun')
            ->where('nama_program', 'not iLike', '%KHS%')
            ->where('nama_pengadaan', 'not iLike', '%KHS%')
            ->orderBy('tahun', 'desc')
            ->get();
        
        // 2. Mengambil data dari kpdev.mart_procdash (CASCADING & EXCLUDING KHS)
        $namaPengadaansQuery = DB::table('kpdev.mart_procdash')
            ->select('nama_pengadaan as title')
            ->distinct()
            ->whereNotNull('nama_pengadaan')
            ->where('nama_program', 'not iLike', '%KHS%')
            ->where('nama_pengadaan', 'not iLike', '%KHS%');

        if (!empty($filters['anggaran'])) {
            $namaPengadaansQuery->where('anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $namaPengadaansQuery->where('cat', $filters['cat']);
        }
        if (!empty($filters['tahun'])) {
            $namaPengadaansQuery->where('tahun', $filters['tahun']);
        }
        if (!empty($filters['activity'])) {
            $namaPengadaansQuery->where('activity', $filters['activity']);
        }
        if (!empty($filters['nomor_kontrak'])) {
            $namaPengadaansQuery->whereIn('nama_pengadaan', function($sub) use ($filters) {
                $sub->select('title')
                    ->from('kpdev.mart_procdash_saving')
                    ->where('doc_number', $filters['nomor_kontrak']);
            });
        }
        
        $namaPengadaans = $namaPengadaansQuery->orderBy('nama_pengadaan')->get();
            
        $nomorKontraksQuery = DB::table('kpdev.mart_procdash_saving')
            ->join('kpdev.mart_procdash', 'kpdev.mart_procdash_saving.title', '=', 'kpdev.mart_procdash.nama_pengadaan')
            ->select('kpdev.mart_procdash_saving.doc_number')
            ->distinct()
            ->whereNotNull('kpdev.mart_procdash_saving.doc_number')
            ->where('kpdev.mart_procdash.nama_program', 'not iLike', '%KHS%')
            ->where('kpdev.mart_procdash.nama_pengadaan', 'not iLike', '%KHS%');

        if (!empty($filters['anggaran'])) {
            $nomorKontraksQuery->where('kpdev.mart_procdash.anggaran', $filters['anggaran']);
        }
        if (!empty($filters['cat'])) {
            $nomorKontraksQuery->where('kpdev.mart_procdash.cat', $filters['cat']);
        }
        if (!empty($filters['tahun'])) {
            $nomorKontraksQuery->where('kpdev.mart_procdash.tahun', $filters['tahun']);
        }
        if (!empty($filters['activity'])) {
            $nomorKontraksQuery->where('kpdev.mart_procdash.activity', $filters['activity']);
        }
        if (!empty($filters['nama_pengadaan'])) {
            $nomorKontraksQuery->where('kpdev.mart_procdash.nama_pengadaan', $filters['nama_pengadaan']);
        }

        $nomorKontraks = $nomorKontraksQuery->orderBy('kpdev.mart_procdash_saving.doc_number')->get();

        // 3. Data Statistik Tahapan Pengadaan (Jumlah & Durasi) - Berdasarkan tahap terakhir/terkini (DISTINCT ON)
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

        $latestStagesBase = DB::table('kpdev.mart_procdash')
            ->selectRaw("DISTINCT ON (kpdev.mart_procdash.nama_pengadaan) kpdev.mart_procdash.nama_pengadaan, kpdev.mart_procdash.kd_prockon, kpdev.mart_procdash.tg_actual_finish, kpdev.mart_procdash.tg_plan_finish")
            ->whereNotNull('kpdev.mart_procdash.nama_pengadaan')
            ->orderBy('kpdev.mart_procdash.nama_pengadaan')
            ->orderByRaw('kpdev.mart_procdash.tg_actual_finish DESC NULLS LAST')
            ->orderBy('kpdev.mart_procdash.kd_prockon', 'desc');

        $latestStagesBase = $applyFiltersForCards($latestStagesBase);

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

        // 4. Data Tabel Dinamis dengan Pagination
        // Strategi deduplication:
        // - GROUP BY (nama_pengadaan, cat, pola, perikatan) → baris yang berbeda di salah satu
        //   kolom ini akan tetap tampil sebagai baris terpisah (bukan dihapus)
        // - Baris yang SEMUA kolom tampilannya sama → hanya muncul sekali (dedup penuh)
        // - Durasi = MAX(tg_actual_finish) - MIN(tg_actual_finish) per kombinasi group
        // - Urutan: MAX(tg_actual_finish) DESC = pengadaan terbaru muncul pertama
        $tableData = DB::table('kpdev.mart_procdash')
            ->select(
                'nama_pengadaan',
                'cat as category',
                'pola',
                'perikatan',
                DB::raw("DATE_PART('day', MAX(tg_actual_finish)::timestamp - MIN(tg_actual_finish)::timestamp) as durasi"),
                DB::raw('MAX(tg_actual_finish) as max_finish') // dipakai untuk urutan terbaru dulu
            )
            ->groupBy('nama_pengadaan', 'cat', 'pola', 'perikatan');

        $tableData = $applyFilters($tableData);

        // Membaca input limit baris data dari request, default 5 baris
        $perPage = (int)$request->input('per_page', 5);
        if (!in_array($perPage, [5, 10, 25, 50])) {
            $perPage = 5;
        }
        $tableData = $tableData
            ->orderByDesc('max_finish') // data terbaru muncul pertama
            ->paginate($perPage)
            ->withQueryString();

        // 5. Data untuk Chart Jumlah Pengadaan Terhadap Kategori (cat) & Pola
        $chartDataRaw = DB::table('kpdev.mart_procdash')
            ->select('cat as category', 'pola', DB::raw('count(DISTINCT nama_pengadaan) as total'))
            ->whereNotNull('cat')
            ->groupBy('cat', 'pola');
        
        $chartDataRaw = $applyFilters($chartDataRaw);
        $chartDataRaw = $chartDataRaw->get();

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

        // 5b. Jumlah distinct nama_pengadaan per unit (cat) untuk chart "Jumlah Persiapan Pengadaan Terhadap Unit"
        $totalPerUnitRaw = DB::table('kpdev.mart_procdash')
            ->select('cat as category', DB::raw('COUNT(DISTINCT nama_pengadaan) as total'))
            ->whereNotNull('cat');
        $totalPerUnitRaw = $applyFilters($totalPerUnitRaw);
        $totalPerUnitRaw = $totalPerUnitRaw->groupBy('cat')->get();

        $totalPerUnit = [];
        foreach ($chartCategories as $cat) {
            $row = $totalPerUnitRaw->first(fn($v) => $v->category === $cat);
            $totalPerUnit[] = $row ? (int)$row->total : 0;
        }

        // 6. Data kalkulator untuk Chart Rata Rata Hari Pengadaan Terhadap Unit (cat)
        // Konsisten dengan tabel: durasi per nama_pengadaan = MAX(tg_actual_finish) - MIN(tg_actual_finish)
        // kemudian dirata-ratakan per unit (cat)
        $durasiPerPengadaanForChart = DB::table('kpdev.mart_procdash')
            ->selectRaw("cat, nama_pengadaan, DATE_PART('day', MAX(tg_actual_finish)::timestamp - MIN(tg_actual_finish)::timestamp) as durasi_pengadaan")
            ->whereNotNull('cat')
            ->whereNotNull('tg_actual_finish');

        $durasiPerPengadaanForChart = $applyFilters($durasiPerPengadaanForChart);
        $durasiPerPengadaanForChart->groupBy('cat', 'nama_pengadaan');

        $avgDurationRaw = DB::table(DB::raw("({$durasiPerPengadaanForChart->toSql()}) as durasi_sub"))
            ->mergeBindings($durasiPerPengadaanForChart)
            ->selectRaw('cat as category, AVG(durasi_pengadaan) as avg_durasi')
            ->groupBy('cat');

        $avgDurationRaw = $avgDurationRaw->get();
        
        $avgDurations = [];
        foreach ($chartCategories as $cat) {
            $row = $avgDurationRaw->first(function($value) use ($cat) {
                return $value->category === $cat;
            });
            // Bulatkan ke satu tempat desimal
            $avgDurations[] = $row ? round((float)$row->avg_durasi, 1) : 0;
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

        // Lempar semua variabel ke View 'procurement'
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
