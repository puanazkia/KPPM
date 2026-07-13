<?php
require __DIR__."/vendor/autoload.php";
$app = require_once __DIR__."/bootstrap/app.php";
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$stages = [
    "dok_juskeb" => ["3101", "2101"],
    "permintaan_pengadaan" => ["3104", "2104"],
    "dok_finance" => ["3102", "2102"],
    "pembuatan_rks" => ["3202", "2202"],
    "rapat_penjelasan" => ["3204", "2204"],
    "evaluasi_proposal" => ["3207", "2207"],
    "pembuatan_hps" => ["3205", "2205"],
    "negoisasi" => ["3208", "2208"],
    "penetapan" => ["3301", "2301"],
    "dokumen_kontrak" => ["3401", "2401"],
    "kontrak" => ["3403", "2403", "5403"],
];

foreach($stages as $name => $codes) {
    $count = DB::table("kpdev.mart_procdash")->whereIn("kd_prockon", $codes)->count();
    
    $avg_duration = DB::table("kpdev.mart_procdash")
        ->whereIn("kd_prockon", $codes)
        ->whereNotNull("tg_actual_finish")
        ->whereNotNull("tg_plan_finish")
        ->selectRaw("AVG(DATE_PART('day', tg_actual_finish::timestamp - tg_plan_finish::timestamp)) as avg_dur")
        ->first();
        
    echo $name . ": Count=" . $count . ", Avg=" . (isset($avg_duration->avg_dur) ? round($avg_duration->avg_dur) : 0) . " days\n";
}

