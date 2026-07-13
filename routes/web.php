<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/procurement');
});

use App\Http\Controllers\ProcurementController;

Route::get('/procurement', [ProcurementController::class, 'index']);

Route::get('/coba', function () {
    return view('coba-tailwind'); // Nama file tanpa .blade.php
});
