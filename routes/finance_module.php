<?php

use App\Http\Controllers\backend\finance_module\AccountHeadController;
use Illuminate\Support\Facades\Route;


Route::controller(AccountHeadController::class)->prefix('/account')->group(function(){

    Route::get('/head','AccountHead')->name('account_head');

    Route::get('/head/add','AddAccountHead')->name('add_account_head');

    Route::post('/head/store','StoreAccountHead')->name('store_account_head');

    Route::get('/head/view/{id}','ViewAccountHead')->name('account_head_view');

    Route::get('/head/edit/{id}','EditAccountHead')->name('edit_account_head');

    Route::post('/head/update','UpdateAccountHead')->name('update_account_head');

    Route::post('/head/delete','DeleteAccountHead')->name('delete_account_head');

});
