<?php

use App\Http\Controllers\backend\student_attendance\StudentAttendanceController;
use Illuminate\Support\Facades\Route;


///student attendance
Route::controller(StudentAttendanceController::class)->prefix('/student')->group(function(){

    Route::get('/today/attendance','TodayAttendance')->name('today_attendance');

    Route::get('/manual/attendance','ManualAttendance')->name('manual_attendance');

    Route::get('/attendance/{id}','AllAttendance');

    Route::get('/single/attendance/{id}','singleAttendance');

    Route::post('/attendance/class','ByGroupAttendance')->name('group_attendance');


    Route::get('/absent/student','AbsentStudent')->name('absent_student');

    Route::get('/attendance/details/all','AttendanceDetails')->name('student_attendance_details');

    Route::post('/details/attendance/all','DetailsAttendance')->name('details_attendance');

    Route::get('/details/attendance/all/pdf','DetailsAttendancePdf')->name('details_attendance_pdf');



    Route::get('/daily/attendance/summary','DailyAttendance')->name('daily_attendance_summary');

    Route::post('/attendance/daily/summary','AttendanceDaily')->name('attendance_summary');

    Route::get('/daily/attendance/pdf','DailyAttendancePdf')->name('daily_attendance_pdf');



    Route::get('/monthly/attendance/summary','MonthlyAttendance')->name('monthly_attendance_summary');

    Route::post('/attendance/monthly/summary','AttendanceMonthly')->name('attendance_summary_monthly');

    Route::get('/monthly/attendance/pdf','MonthlyAttendancePdf')->name('monthly_attendance_pdf');



});
