<?php

use App\Http\Controllers\UserManagmentController;
use Illuminate\Support\Facades\Route;


///student attendance
Route::middleware('auth')->controller(UserManagmentController::class)->prefix('/User')->group(function () {

    Route::get('/StudentList', 'studentList')->name('studentlist');

    Route::get('/StudentSms','Studentsms')->name('studentsms');

    Route::get('/EmployeSms', 'EmployeSms')->name('employesms');
    Route::get('/Add', 'add')->name('user.add');
    Route::post('/Add/ok', 'input')->name('user.input');
    Route::get('/Show/{id}', 'show')->name('user.show');
    Route::get('/Edit/{id}', 'edit')->name('user.edit');
    Route::post('/EditOk', 'editInput')->name('user.editinput');
    Route::get('/userdelete/{id}', 'userDelete')->name('user.delete');

    Route::post('/profile', 'ProfileInput')->name('input.profile');

    // Role Part
    Route::get('/Role', 'Index')->name('role.index');
    Route::post('/Permitttion/Post', 'Permittion_Input')->name('add.permittion');
    Route::post('/Role/Post', 'Role_Input')->name('add.role');
    Route::post('/Role/Assign', 'Role_Assign')->name('add.assign');
    Route::get('/Role/edit/{id}', 'Edit_permittion')->name('edit.permition');
    Route::get('/Role/PermittionUpdate', 'permittionUpdate')->name('update.permition');
});
