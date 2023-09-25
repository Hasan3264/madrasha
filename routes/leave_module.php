<?php

use App\Http\Controllers\backend\leave_module\LeaveController;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->controller(LeaveController::class)->prefix('/leave')->group(function(){


    //////////////////////// Start Leave Type////////////////




 Route::get('/type','LeaveType')->name('leave_type');

 Route::get('/type/add','AddLeaveType')->name('add_leave_type');

 Route::post('/type/store','StoreLeaveType')->name('store_leave_type');

 Route::get('/type/edit/{id}','EditLeaveType')->name('edit_leave_type');

 Route::post('/type/update','UpdateLeaveType')->name('update_leave_type');

 Route::get('/type/view/{id}','ViewLeaveType')->name('view_leave_type');

 Route::post('/type/delete','DeleteLeaveType')->name('delete_leave_type');



    //////////////////////// End Leave Type////////////////

    //////////////////////// Start Leave Entry////////////////

 Route::get('/entry','LeaveEntry')->name('leave_entry');
 Route::post('/emp','findEmp')->name('getempById');

    //////////////////////// End Leave Entry////////////////

    //////////////////////// Start Manage Leave ////////////////

 Route::get('/leave','Leave')->name('leave');

 Route::post('/store','StoreLeave')->name('store_leave');

 Route::get('/edit/{id}','EditLeave')->name('edit_leave');

 Route::post('/update','UpdateLeave')->name('update_leave');

 Route::get('/view/{id}','ViewLeave')->name('view_leave');

 Route::post('/delete','DeleteLeave')->name('delete_leave');

    //////////////////////// End  Manage Leave ////////////////


});


