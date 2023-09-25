<?php

use App\Http\Controllers\backend\employeAttendenc\EmployeAttendensController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->controller(EmployeAttendensController::class)->prefix('/employeAttendenc')->group(function () {
    Route::get('/today', 'today')->name('today');
    Route::get('/manual', 'manual')->name('manual');
    Route::post('/api/fetch-employees', 'fetchEmployees');
    Route::post('/manual-attendance-store', 'manualStore')->name('manual.store');

    Route::get('/details', 'details')->name('details');
    Route::post('/attendance-details', 'employeeAttendanceDetails')->name('employee.attendance.details');
    Route::get('/dailyDetails', 'dailyDetailsForm')->name('dailyDetails');
Route::post('/dailyDetails', 'dailyDetails')->name('employee.daily.attendance.details');
    Route::get('/monthlyDetails', 'monthlyDetailsForm')->name('monthlyDetails');
Route::post('/monthlyDetails', 'monthlyDetails')->name('employee.monthly.attendance.details');
});

///All Shift List
