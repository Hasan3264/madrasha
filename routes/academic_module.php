<?php

use App\Http\Controllers\backend\academic_module\AllClassController;
use App\Http\Controllers\backend\academic_module\AllGroupController;
use App\Http\Controllers\backend\academic_module\AllSectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\academic_module\AllShiftListController;
use App\Http\Controllers\backend\academic_module\AllSubjectController;

///All Shift List
Route::middleware('auth')->controller(AllShiftListController::class)->prefix('/academic')->group(function(){

    Route::get('/all/shift/list','AllShiftList')->name('all-shift-list');

    Route::get('/add/shift','AddShift')->name('add-shift');

    Route::post('/store/shift','StoreShift')->name('store-shift');

    Route::get('/edit/shift/{id}','EditShift')->name('edit-shift');

    Route::post('/update/shift','UpdateShift')->name('update-shift');

    Route::get('/delete/shift/{id}','DeleteShift')->name('delete-shift');

    Route::get('/shift/view/{id}','ShiftView')->name('shift-view');

});


///All class List
Route::middleware('auth')->controller(AllClassController::class)->prefix('/academic')->group(function(){

    Route::get('/all/class/list','AllClassList')->name('all-class-list');

    Route::get('/add/class','AddClass')->name('add-class');

    Route::post('/store/class','StoreClass')->name('store-class');

    Route::get('/edit/class/{id}','EditClass')->name('edit-class');

    Route::post('/update/class','UpdateClass')->name('update-class');

    Route::get('/delete/class/{id}','DeleteClass')->name('delete-class');

    Route::get('/class/view/{id}','ClassView')->name('class-view');

});


//////////////  All section list ///////////////
Route::middleware('auth')->controller(AllSectionController::class)->prefix('/academic')->group(function(){

    Route::get('/all/section/list','AllSection')->name('all-section');

    Route::get('/add/section','AddSection')->name('add-section');

    Route::post('/store/section','StoreSection')->name('store-section');

    Route::get('/view/section/{id}','SectionView')->name('section-view');

    Route::get('/edit/section/{id}','EditSection')->name('edit-section');

    Route::post('/update/section','UpdateSection')->name('update-section');

    Route::get('/delete/section/{id}','DeleteSection')->name('delete-section');

});

Route::middleware('auth')->controller(AllGroupController::class)->prefix('/academic')->group(function(){

    Route::get('/all/group/list','AllGroup')->name('all-group');

    Route::get('/add/group','AddGroup')->name('add-group');

    Route::post('/store/group','StoreGroup')->name('store-group');

    Route::get('/view/group/{id}','GroupView')->name('group-view');

    Route::get('/edit/group/{id}','EditGroup')->name('edit-group');

    Route::post('/update/group','UpdateGroup')->name('update-group');

    Route::get('/delete/group/{id}','DeleteGroup')->name('delete-group');

});


Route::middleware('auth')->controller(AllSubjectController::class)->prefix('/subject')->group(function(){

    Route::get('/all/subject/list','AllSubject')->name('all.subject');

     Route::get('/add/Subject','AddSubject')->name('add.subject');

     Route::post('/getclassBYmedium','getclassBYmedium')->name('getclassbymedium');

     Route::post('/store','Storesubject')->name('store.subject');

     Route::get('/view/subject/{id}','subjectView')->name('subject.view');

     Route::get('/edit/subject/{id}','EditSubject')->name('edit.subject');

     Route::post('/update','Updatesubject')->name('update.subject');

     Route::post('/deleteSubject','DeleteGroup')->name('delete.subject');

});

