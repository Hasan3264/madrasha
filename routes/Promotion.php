<?php

use App\Http\Controllers\backend\Promotion\PromorionOneController;
use App\Http\Controllers\backend\Promotion\PromorionTwoController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->controller(PromorionOneController::class)->prefix('/Promotion')->group(function () {
    Route::get('/MyGroup', 'myGroup')->name('mygroup');
    Route::get('/MyContect', 'myContuct')->name('mycontect');
    Route::get('/importContuct', 'importContuct')->name('inportcontuct');
});
Route::middleware('auth')->controller(PromorionTwoController::class)->prefix('/Promotion')->group(function () {
    Route::get('/sendCustomeSms', 'sendCustomesms')->name('sendcustomesms');
    Route::get('/sendDetailsReport', 'sendDetailsReport')->name('senddetailsreport');
});
