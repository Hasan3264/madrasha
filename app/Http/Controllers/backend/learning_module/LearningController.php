<?php

namespace App\Http\Controllers\backend\learning_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearningController extends Controller
{
       //////////////////////// Start Live Class ////////////////
    public function ManageLiveClass(){
        return view('backend.learning_module.live_class.manage_live_class');
    }//end method

    public function AddLiveClass(){
        return view('backend.learning_module.live_class.add_live_class');
    }//end method

    public function StoreLiveClass(){

    }//end method

    public function EditLiveClass(){
        return view('backend.learning_module.live_class.live_class_edit');
    }//end method

    public function UpdateLiveClass(){

    }//end method

    public function LiveClassReport(){
        return view('backend.learning_module.live_class.live_class_report');
    }//end method

    public function ViewLiveClass(){
        return view('backend.learning_module.live_class.live_class_view');
    }//end method

    public function DeleteLiveClass(){

    }//end method

       //////////////////////// EndLive Class ////////////////


    //////////////////////// Start Academic Syllabus ////////////////

    public function Syllabus(){
        return view('backend.learning_module.academic_syllabus.syllabus');
    }//end method

    public function AddSyllabus(){
        return view('backend.learning_module.academic_syllabus.add_syllabus');
    }//end method

    public function StoreSyllabus(){

    }//end method

    public function EditSyllabus(){
        return view('backend.learning_module.academic_syllabus.syllabus_edit');
    }//end method

    public function UpdateSyllabus(){

    }//end method

    public function ViewSyllabus(){
        return view('backend.learning_module.academic_syllabus.syllabus_view');
    }//end method

    public function DeleteSyllabus(){

    }//end method


    //////////////////////// End Academic Syllabus ////////////////


      //////////////////////// Start Lesson Plan ////////////////

    public function LessonPlan(){
        return view('backend.learning_module.leason_plan.leason_plan');
    }//end method

    public function AddLessonPlan(){
        return view('backend.learning_module.leason_plan.add_leason_plan');
    }//end method

    public function StoreLessonPlan(){

    }//end method
    
    public function DeleteLessonPlan(){

    }//end method

     //////////////////////// End  Lesson PLan ////////////////


    public function ClassWorkList(){
        return view('backend.learning_module.class_work_list');
    }//end method

    public function CwSubmitted(){
        return view('backend.learning_module.cw_submitted');
    }//end method

    public function HomeWork(){
        return view('backend.learning_module.home_work');
    }//end method

    public function HwSubmitted(){
        return view('backend.learning_module.hw_submitted');
    }//end method



}
