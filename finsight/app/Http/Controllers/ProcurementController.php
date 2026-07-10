<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProcurementController extends Controller
{
    public function index()
    {
        // 1. Mengambil data master (distinct) dari kpdev.mart_procdash
        $progresses = DB::table('kpdev.mart_procdash')->select('nama_program')->distinct()->whereNotNull('nama_program')->orderBy('nama_program')->get();
        $budgets = DB::table('kpdev.mart_procdash')->select('anggaran')->distinct()->whereNotNull('anggaran')->orderBy('anggaran')->get();
        $units = DB::table('kpdev.mart_procdash')->select('unit')->distinct()->whereNotNull('unit')->orderBy('unit')->get();
        $subUnits = DB::table('kpdev.mart_procdash')->select('cat')->distinct()->whereNotNull('cat')->orderBy('cat')->get();
        $activities = DB::table('kpdev.mart_procdash')->select('activity')->distinct()->whereNotNull('activity')->orderBy('activity')->get();
        
        // 2. Mengambil data dari kpdev.mart_procdash_saving
        $vendors = DB::table('kpdev.mart_procdash_saving')->select('vendor')->distinct()->whereNotNull('vendor')->orderBy('vendor')->get();
        $namaPengadaans = DB::table('kpdev.mart_procdash_saving')->select('title')->distinct()->whereNotNull('title')->orderBy('title')->get();
        $nomorKontraks = DB::table('kpdev.mart_procdash_saving')->select('doc_number')->distinct()->whereNotNull('doc_number')->orderBy('doc_number')->get();
            
        // 3. Data Tahun Pengadaan
        $tahuns = DB::table('kpdev.mart_procdash')->select('tahun')->distinct()->whereNotNull('tahun')->orderBy('tahun', 'desc')->get();

        // Lempar semua variabel ke View 'procurement'
        return view('procurement', compact(
            'progresses', 
            'budgets', 
            'units', 
            'subUnits', 
            'activities', 
            'vendors', 
            'namaPengadaans', 
            'nomorKontraks',
            'tahuns'
        ));
    }
}
