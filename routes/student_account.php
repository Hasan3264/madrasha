<?php

use App\Http\Controllers\backend\student_account\StudentAccountController;
use Illuminate\Support\Facades\Route;


Route::controller(StudentAccountController::class)->prefix('/student')->group(function(){



    Route::get('/admission/fee','AdmissionFee')->name('student_admission_fee');//page retirive function
    Route::post('/admission/fee/Insert','AdmissionFeeInsert')->name('admission.Insert');//admittion insert
    Route::post('/getshift','getShift')->name('getshiftbymedium');//get shift
    Route::post('/monthInsert','monthInsert')->name('admission.monthInsert');//monthInsert
    Route::get('/monthly/fee','MonthlyFee')->name('monthly_fee');//monthlyFee page retrieves
    Route::post('/getstudent','getstudentByClass')->name('getstudent.class');//get student
    Route::get('/student/fee','StudentFee')->name('student_fee');//student fee page retrieves
    Route::post('/FeeInput','studentFeeInput')->name('add.studentFee');//student fee input
    Route::get('/student/waiver','StudentWaiver')->name('student_waiver');//student waiver page retrieve
    Route::post('/student/waiver/input','studenWaiverInput')->name('input.studenWaiver');//student waiver page retrieve
    Route::post('/student/filture','filtureData')->name('filture.data');//filture data
    Route::post('/fee/update','feedetailsupdate')->name('feedetails.update');//fee datails update or input
    Route::get('/quick/collection','QuickCollection')->name('quick_collection');
    //print month quick collection invoice
    Route::get('/printinvoice/quick/{id}','printinvoice')->name('print_invoice');
  // fee collection input


});
