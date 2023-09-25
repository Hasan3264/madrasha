<?php

namespace App\Http\Controllers\backend\boucher;

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->controller(BoucherController::class)->prefix('/Boucher')->group(function () {
    Route::get('/Recive', 'recive')->name('recive');
    Route::get('/Payment', 'paymnet')->name('paymnet');
});
