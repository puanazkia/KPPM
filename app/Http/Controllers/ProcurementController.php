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
            'tahun' => $request->input('tahun', '2025'),
            'nama_pengadaan' => $request->input('nama_pengadaan'),
            'nomor_kontrak' => $request->input('nomor_kontrak'),
        ];
        
        $applyFilters = function($query) use ($filters) {
            if (!empty($filters['anggaran'])) {
                $query->where('anggaran', $filters['anggaran']);
            }
            if (!empty($filters['cat'])) {
                $query->where('cat', $filters['cat']);
            }
            if (!empty($filters['activity'])) {
                $query->where('activity', $filters['activity']);
            }
            if (!empty($filters['tahun'])) {
                $query->where('tahun', $filters['tahun']);
            }
            if (!empty($filters['nama_pengadaan'])) {
                $query->where('nama_pengadaan', $filters['nama_pengadaan']);
            }
            if (!empty($filters['nomor_kontrak'])) {
                $query->whereIn('nama_pengadaan', function($sub) use ($filters) {
                    $sub->select('title')
                        ->from('kpdev.mart_procdash_saving')
                        ->where('doc_number', $filters['nomor_kontrak']);
                });
            }
            return $query;
        };

        $applyFiltersForCards = function($query) use ($filters) {
            if (!empty($filters['anggaran'])) {
                $query->where('anggaran', $filters['anggaran']);
            }
            if (!empty($filters['cat'])) {
                $query->where('cat', $filters['cat']);
            }
            // IGNORING ACTIVITY FOR CARDS to prevent all cards from being 0 when a stage is selected
            if (!empty($filters['tahun'])) {
                $query->where('tahun', $filters['tahun']);
            }
            if (!empty($filters['nama_pengadaan'])) {
                $query->where('nama_pengadaan', $filters['nama_pengadaan']);
            }
            if (!empty($filters['nomor_kontrak'])) {
                $query->whereIn('nama_pengadaan', function($sub) use ($filters) {
                    $sub->select('title')
                        ->from('kpdev.mart_procdash_saving')
                        ->where('doc_number', $filters['nomor_kontrak']);
                });
            }
            return $query;
        };

        // 1. Mengambil data master (distinct) dari kpdev.mart_procdash (TIDAK CASCADING agar filter tidak hilang)
        $progresses = DB::table('kpdev.mart_procdash')->select('nama_program')->distinct()->whereNotNull('nama_program')->orderBy('nama_program')->get();
        $budgets = DB::table('kpdev.mart_procdash')->select('anggaran')->distinct()->whereNotNull('anggaran')->orderBy('anggaran')->get();
        $units = DB::table('kpdev.mart_procdash')->select('cat as category')->distinct()->whereNotNull('cat')->orderBy('cat')->get();
        $activities = DB::table('kpdev.mart_procdash')->select('activity')->distinct()->whereNotNull('activity')->orderBy('activity')->get();
        $tahuns = DB::table('kpdev.mart_procdash')->select('tahun')->distinct()->whereNotNull('tahun')->orderBy('tahun', 'desc')->get();
        
        // 2. Mengambil data dari kpdev.mart_procdash_saving (TIDAK CASCADING)
        $namaPengadaans = DB::table('kpdev.mart_procdash_saving')
            ->select('title')
            ->distinct()
            ->whereNotNull('title')
            ->orderBy('title')
            ->get();
            
        $nomorKontraks = DB::table('kpdev.mart_procdash_saving')
            ->select('doc_number')
            ->distinct()
            ->whereNotNull('doc_number')
            ->orderBy('doc_number')
            ->get();

        // 3. Data Statistik Tahapan Pengadaan (Jumlah & Durasi) - Menggunakan applyFiltersForCards
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

        $stageStats = [];
        foreach ($procurementStages as $key => $codes) {
            $queryCount = DB::table('kpdev.mart_procdash')->whereIn('kd_prockon', $codes);
            $queryCount = $applyFiltersForCards($queryCount);
            $count = $queryCount->count();
            
            $queryAvg = DB::table('kpdev.mart_procdash')
                ->whereIn('kd_prockon', $codes)
                ->whereNotNull('tg_actual_finish')
                ->whereNotNull('tg_plan_finish')
                ->selectRaw("AVG(DATE_PART('day', tg_actual_finish::timestamp - tg_plan_finish::timestamp)) as avg_dur");
            $queryAvg = $applyFiltersForCards($queryAvg);
            $avgDuration = $queryAvg->first();
                
            $avgDays = $avgDuration && $avgDuration->avg_dur !== null ? abs(round($avgDuration->avg_dur)) : 0;
            
            $stageStats[$key] = [
                'count' => $count,
                'avg_days' => $avgDays
            ];
        }

        // 4. Data Tabel Dinamis
        $tableData = DB::table('kpdev.mart_procdash')
            ->leftJoin('kpdev.mart_procdash_saving', 'kpdev.mart_procdash.nama_pengadaan', '=', 'kpdev.mart_procdash_saving.title')
            ->select(
                'kpdev.mart_procdash.nama_pengadaan',
                'kpdev.mart_procdash.unit',
                'kpdev.mart_procdash_saving.nilai_ss_juspeng as biaya_estimasi',
                'kpdev.mart_procdash_saving.nilai_kontrak as biaya',
                DB::raw("DATE_PART('day', kpdev.mart_procdash.tg_actual_finish::timestamp - kpdev.mart_procdash.tg_plan_finish::timestamp) as durasi"),
                'kpdev.mart_procdash.pola',
                'kpdev.mart_procdash.perikatan'
            );
        $tableData = $applyFilters($tableData);
        $tableData = $tableData->orderBy('kpdev.mart_procdash.tg_actual_finish', 'desc')->limit(100)->get();

        // 5. Data untuk Chart Jumlah Pengadaan Terhadap Kategori (cat) & Pola
        $chartDataRaw = DB::table('kpdev.mart_procdash')
            ->select('cat as category', 'pola', DB::raw('count(*) as total'))
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
            'chartSeries'
        ));
    }
}
