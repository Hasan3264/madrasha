<?php

use App\Http\Controllers\backend\learning_module\LearningController;
use Illuminate\Support\Facades\Route;

Route::controller(LearningController::class)->prefix('/learning')->group(function(){


    //////////////////////// Start Live Class ////////////////

 Route::get('/manage/live/class','ManageLiveClass')->name('manage_live_class');

 Route::get('/add/live/class','AddLiveClass')->name('add_live_class');

 Route::post('/store/live/class','StoreLiveClass')->name('store_live_class');

 Route::get('/edit/live/class','EditLiveClass')->name('edit_live_class');

 Route::post('/update/live/class','UpdateLiveClass')->name('update_live_class');

 Route::get('/report/live/class','LiveClassReport')->name('live_class_report');

 Route::get('/view/live/class','ViewLiveClass')->name('view_live_class');

 Route::get('/delete/live/class','DeleteLiveClass')->name('delete_live_class');


    //////////////////////// EndLive Class ////////////////


    //////////////////////// Start Academic Syllabus ////////////////

 Route::get('/syllabus','Syllabus')->name('syllabus');

 Route::get('/add/syllabus','AddSyllabus')->name('add_syllabus');

 Route::post('/store/syllabus','StoreSyllabus')->name('store_syllabus');

 Route::get('/edit/syllabus','EditSyllabus')->name('edit_syllabus');

 Route::post('/update/syllabus','UpdateSyllabus')->name('update_syllabus');

 Route::get('/view/syllabus','ViewSyllabus')->name('view_syllabus');

 Route::get('/delete/syllabus','DeleteSyllabus')->name('delete_syllabus');

    //////////////////////// End Academic Syllabus ////////////////



    //////////////////////// Start Lesson Plan ////////////////

 Route::get('/lesson/plan','LessonPlan')->name('lesson_plan');

 Route::get('/add/lesson/plan','AddLessonPlan')->name('add_lesson_plan');

 Route::post('/store/lesson/plan','StoreLessonPlan')->name('store_lesson_plan');

 Route::post('/delete/lesson/plan','DeleteLessonPlan')->name('delete_lesson_plan');


    //////////////////////// End  Lesson PLan ////////////////


 Route::get('/class/work/list','ClassWorkList')->name('class_work_list');

 Route::get('/class/work/submitted','CwSubmitted')->name('cw_submitted');

 Route::get('/home/work','HomeWork')->name('home_work');

 Route::get('/home/work/submitted','HwSubmitted')->name('hw_submitted');



});
