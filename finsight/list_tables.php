<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $queries = [
        'unit' => "SELECT DISTINCT unit FROM kpdev.mart_procdash WHERE unit IS NOT NULL",
        'sub_unit' => "SELECT DISTINCT cat FROM kpdev.mart_procdash WHERE cat IS NOT NULL",
        'activity' => "SELECT DISTINCT activity FROM kpdev.mart_procdash WHERE activity IS NOT NULL",
        'anggaran' => "SELECT DISTINCT anggaran FROM kpdev.mart_procdash WHERE anggaran IS NOT NULL",
        'program' => "SELECT DISTINCT nama_program FROM kpdev.mart_procdash WHERE nama_program IS NOT NULL",
        'vendor' => "SELECT DISTINCT vendor FROM kpdev.mart_procdash_saving WHERE vendor IS NOT NULL",
        'nama_pengadaan' => "SELECT DISTINCT title FROM kpdev.mart_procdash_saving WHERE title IS NOT NULL",
        'nomor_kontrak' => "SELECT DISTINCT doc_number FROM kpdev.mart_procdash_saving WHERE doc_number IS NOT NULL",
        'tahun' => "SELECT DISTINCT tahun FROM kpdev.mart_procdash WHERE tahun IS NOT NULL"
    ];

    foreach($queries as $name => $sql) {
        $result = DB::select($sql);
        echo "$name count: " . count($result) . "\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
