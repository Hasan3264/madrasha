<?php

use App\Http\Controllers\backend\student_module\StudentController;
use Illuminate\Support\Facades\Route;



Route::controller(StudentController::class)->prefix('/students')->group(function(){

    Route::get('/add-students',"addForm")->name("students.add");

    Route::post('/store-students',"StoreStudentInfo")->name("students.store");

    Route::get('/print-admission-form',"printForm")->name('students.print-admission-form');

   /// after finish all task
    Route::post('/print/admission/form',"GeneratePdf")->name('print-admission-form');


    Route::get('/current-students',"currentStudentList")->name('students.current-students');

    Route::get('/current-students-view/{id}',"currentStudentView")->name('student_view');

    Route::get('/current-students-edit/{id}',"currentStudentEdit")->name('student_edit');

    Route::post('/current-students-update',"currentStudentUpdate")->name('students.update');

    Route::get('/current-students-delete/{id}',"DeleteStudentInfo")->name('students.delete');

    ///archive student/////
    Route::get('/archive-students',"archiveStudentList")->name('students.archive-students');

    Route::get('/add/archive',"AddArchive")->name("archive_students_add");

    Route::post('/store/archive',"StoreArchive")->name("archive_students_store");

    Route::get('/edit/archive/{id}',"EditArchive")->name("archive_students_edit");

    Route::post('/update/archive',"ArchiveUpdate")->name("archive_students_update");

    Route::get('/view/archive/{id}',"ViewArchive")->name("archive_students_view");

    Route::get('/delete/archive/{id}',"DeleteArchive")->name("archive_students_delete");


    Route::get('/current-students-search',"currentStudentSearch")->name('students.current-students-search');

    Route::get('/archive-students-search', "archiveStudentSearch")->name('students.archive-students-search');

    Route::get('/student-switch','studentSwitch')->name('students.switch');



    Route::get('/student-migration','studentMigration')->name('students.migration');
    Route::post('/student/migration/done','studentMigrationDone')->name('students_migration_done');



    Route::get('/print-student-id','printStudentId')->name('students.print-student-id');

    Route::post('/print/id/card','PrintIdCard')->name('print_id_card');




    Route::get('/student-biometric-export','biometricExport')->name('students.biometric-export');

    Route::post('/student/export','StudentExport')->name('student_export');



    Route::get('/print-student-testimonial','printStudentTestimonial')->name('students.print-student-testimonial');

    Route::post('/print/testimonial','PrintTestimonial')->name('testimonial');

});



