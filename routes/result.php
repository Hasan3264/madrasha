<?php

use App\Http\Controllers\backend\result\ResultController;
use App\Http\Controllers\backend\resultReport\ResultReportController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->controller(ResultController::class)->prefix('/result')->group(function () {
    Route::get('/BlankSheet', 'blanksheet')->name('blanksheet');
    Route::get('/MarksEntrySubject', 'EntrySubject')->name('entrysubject');
    Route::get('/MarksEntryExam', 'EntryExam')->name('entryexam');
    Route::get('/ResultSetting', 'Setting')->name('setting');
});

Route::middleware('auth')->controller(ResultReportController::class)->prefix('/resultReport')->group(function () {
    Route::get('/Student/MaritList', 'maritList')->name('maritlist');
    Route::get('/Student/ReportCard', 'reportCard')->name('reportcard');
    Route::get('/Student/Wise', 'Wise')->name('wise');
});
