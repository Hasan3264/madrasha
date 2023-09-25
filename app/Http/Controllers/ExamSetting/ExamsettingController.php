<?php

namespace App\Http\Controllers\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\academic_module\AllClass;
use App\Models\ExamSetting\GradeMOdule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamSetting\ExamTerms;
use App\Models\ExamSetting\Exampart;
use App\Models\ExamSetting\AssignExam;
use App\Models\ExamSetting\Examworkingdays;

class ExamsettingController extends Controller
{

    public function ManageGrade(){
        $grades = GradeMOdule::latest()->paginate(15);
        return view('backend.Examsetting.grade.managegrade',compact('grades'));
    }//end method
    public function AddGrade(){
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.grade.addgrade',compact('classname'));
    }//end method
   
    public function InsertGrade(Request $request){
        $request->validate([
            'class_name' => 'required',
            'start_mark' => 'required|numeric',
            'end_mark' => 'required|numeric',
            'grade_latter' => 'required|alpha',
            'grade_point' => 'required|numeric',
            'remarks' => 'required|max:100',
            'status' => 'required',
        ]);
        $gradeinsert = new GradeMOdule();
        $gradeinsert->class_name = $request->class_name;
        $gradeinsert->start_mark = $request->start_mark;
        $gradeinsert->end_mark = $request->end_mark;
        $gradeinsert->grade_latter = ucwords($request->grade_latter);
        $gradeinsert->grade_point = $request->grade_point;
        $gradeinsert->remarks = $request->remarks;
        $gradeinsert->status = $request->status;
        $gradeinsert->created_by = Auth::user()->id;
        $gradeinsert->created_at = Carbon::now();
        $gradeinsert->save();
        $notification = array(
            'message' => 'Grade Added',
            'alert-type' => 'success'
        );
        return redirect()->route('managegrade')->with($notification);

    }//end method

    public function GradeEdit($id){
        $grade = GradeMOdule::find($id);
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.grade.editgrades',compact('grade','classname'));
    }//end method


    public function UpdateGrade(Request $request,$id){
        $request->validate([
            'class_name' => 'required',
            'start_mark' => 'required|numeric',
            'end_mark' => 'required|numeric',
            'grade_latter' => 'required|alpha',
            'grade_point' => 'required|numeric',
            'remarks' => 'required|max:100',
            'status' => 'required',
        ]);
        $gradeinsert = GradeMOdule::findOrFail($id);
        $gradeinsert->class_name = $request->class_name;
        $gradeinsert->start_mark = $request->start_mark;
        $gradeinsert->end_mark = $request->end_mark;
        $gradeinsert->grade_latter = ucwords($request->grade_latter);
        $gradeinsert->grade_point = $request->grade_point;
        $gradeinsert->remarks = $request->remarks;
        $gradeinsert->status = $request->status;
        $gradeinsert->updated_by = Auth::user()->id;
        $gradeinsert->updated_at = Carbon::now();
        $gradeinsert->update();
        $notification = array(
            'message' => 'Grade Updated',
            'alert-type' => 'info'
        );
        return redirect()->route('managegrade')->with($notification);

    }//end method

    public function GradeDelete($id){
        $gradeinsert = GradeMOdule::findOrFail($id);
        $gradeinsert->delete();
        $notification = array(
            'message' => 'Grade Deleted',
            'alert-type' => 'error'
        );
        return redirect()->route('managegrade')->with($notification);
    }//end method
    public function GradeShow($id){
        $gradeshow = GradeMOdule::findOrFail($id);
        return view('backend.Examsetting.grade.showgrades',compact('gradeshow'));
    }//end method



   
    // EXAMTERMS

    public function Manageexamterms(){
        $terms = ExamTerms::latest()->paginate(15);
        return view('backend.Examsetting.examterms.manageexamterms',compact('terms'));
    }//end method
    public function Addexamterms(){
        return view('backend.Examsetting.examterms..addexamterms');
    }//end method
    public function InsertTerms(Request $request){
       $request->validate([
            'term_name'=> 'required|max:150',
            'rank'=> 'required|max:150',
            'related_to_final'=> 'required',
            'cfinal_term'=> 'required',
            'admit_routine'=> 'required',
            'admitcard_instruction'=> 'required',
            'routine_instruction'=> 'required',
            'result_publish'=> 'required',
            'status'=> 'required',
       ]);

       $insertterms = new ExamTerms();
       $insertterms->term_name = $request->term_name;
       $insertterms->rank = $request->rank;
       $insertterms->related_to_final = $request->related_to_final;
       $insertterms->cfinal_term = $request->cfinal_term;
       $insertterms->admit_routine = $request->admit_routine;
       $insertterms->admitcard_instruction = $request->admitcard_instruction;
       $insertterms->result_publish = $request->result_publish;
       $insertterms->routine_instruction = $request->routine_instruction;
       $insertterms->status = $request->status;
       $insertterms->created_by = Auth::id();
       $insertterms->created_at = Carbon::now();
       $insertterms->save();
       $notification = array(
        'message' => 'Terms Added',
        'alert-type' => 'info'
         );
         return redirect()->route('manageexamterms')->with($notification);

    }//end method
    
    public function EditTerms($id){
        $editexam = ExamTerms::findOrFail($id);
        return view('backend.Examsetting.examterms..editexam',compact('editexam'));
    }//end method
    public function ShowTerms($id){
        $showterm = ExamTerms::findOrFail($id);
        return view('backend.Examsetting.examterms.showterm',compact('showterm'));
    }//end method
    
    public function UpdateExamTerms(Request $request,$id){
       $request->validate([
            'term_name'=> 'required|max:150',
            'rank'=> 'required|max:150',
            'related_to_final'=> 'required',
            'cfinal_term'=> 'required',
            'admit_routine'=> 'required',
            'admitcard_instruction'=> 'required',
            'routine_instruction'=> 'required',
            'result_publish'=> 'required',
            'status'=> 'required',
       ]);

       $editexam = ExamTerms::findOrFail($id);
       $editexam->term_name = $request->term_name;
       $editexam->rank = $request->rank;
       $editexam->related_to_final = $request->related_to_final;
       $editexam->cfinal_term = $request->cfinal_term;
       $editexam->admit_routine = $request->admit_routine;
       $editexam->admitcard_instruction = $request->admitcard_instruction;
       $editexam->result_publish = $request->result_publish;
       $editexam->routine_instruction = $request->routine_instruction;
       $editexam->status = $request->status;
       $editexam->updated_at = Carbon::now();
       $editexam->updated_by = Auth::id();
       $editexam->update();
       $notification = array(
        'message' => 'Terms Updated Success',
        'alert-type' => 'success'
         );
         return redirect()->route('manageexamterms')->with($notification);

    }//end method
    public function DeleteTerms($id){
        $editexam = ExamTerms::findOrFail($id);
        $editexam->delete();
        $notification = array(
            'message' => 'Successfully Deleted',
            'alert-type' => 'error'
             );
             return redirect()->route('manageexamterms')->with($notification);
    }//end method
    
    



    // EXAM PARTS

    public function Manageexamparts(){
        $examparts = Exampart::latest()->get();
        return view('backend.Examsetting.exampart.manageexamparts',compact('examparts'));
    }//end method
    public function Addexamparts(){
        return view('backend.Examsetting.exampart.addexamparts');
    }//end method
    
    public function InsertPart(Request $request){
        $request->validate([
            'name'=> 'required|max:150',
            'rank'=> 'required|max:100',
            'status'=> 'required',
        ]);

        $insertpart = new Exampart();
        $insertpart->name = $request->name;
        $insertpart->rank = $request->rank;
        $insertpart->status = $request->status;
        $insertpart->created_by = Auth::id();
        $insertpart->created_at = Carbon::now();
        $insertpart->save();
        $notification = array(
            'message' => 'Exam Part Added',
            'alert-type' => 'info'
        );
        return redirect()->route('manageexamparts')->with($notification);
    }//end method
    
    public function EditPart($id){
        $exampart = Exampart::findorFail($id);
        return view('backend.Examsetting.exampart.editpart',compact('exampart'));
    }//end method
   
    public function ShowPart($id){
        $exampart = Exampart::findorFail($id);
        return view('backend.Examsetting.exampart.showpart',compact('exampart'));
    }//end method
    
    public function UpdatePart(Request $request,$id){
        $request->validate([
            'name'=> 'required|max:150',
            'rank'=> 'required|max:100',
            'status'=> 'required',
        ]);
        
        $insertpart = Exampart::find($id);
        $insertpart->name = $request->name;
        $insertpart->rank = $request->rank;
        $insertpart->status = $request->status;
        $insertpart->updated_by = Auth::id();
        $insertpart->updated_at = Carbon::now();
        $insertpart->update();
        $notification = array(
            'message' => 'Exam Part Updated',
            'alert-type' => 'info'
        );
        return redirect()->route('manageexamparts')->with($notification);
    }//end method


    public function DeletePart($id){
        $exampart = Exampart::findorFail($id);
        $exampart->delete();
        $notification = array(
            'message' => 'Exam Part Deleted',
            'alert-type' => 'error'
        );
        return redirect()->route('manageexamparts')->with($notification);
    }//end method 
    
    
    
    
    // EXAM ASSIGN
    
    
    public function Manageexamassign(){
        $examassigns = AssignExam::latest()->get();
        return view('backend.Examsetting.Assignexam.manageexamassign',compact('examassigns'));
    }//end method
    public function Addexamassign(){
        $examterm = ExamTerms::select('id','term_name')->get();
        $exampart = Exampart::select('id','name')->get();
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.Assignexam.addexamassign',compact('exampart','examterm','classname'));
    }//end method
    public function InsertAssign(Request $request){
        $request->validate([
            'exam_terms'=> 'required',
            'exam_part'=> 'required',
            'individual_part'=> 'required|max:150',
            'marks_term'=> 'required',
            'absent'=> 'required|max:150',
            'class'=> 'required',
        ]);

        $insertpart = new AssignExam();
        $insertpart->exam_terms = $request->exam_terms;
        $insertpart->exam_part = $request->exam_part;
        $insertpart->individual_part = $request->individual_part;
        $insertpart->marks_term = $request->marks_term;
        $insertpart->absent = $request->absent;
        $insertpart->class = $request->class;
        $insertpart->created_by = Auth::id();
        $insertpart->created_at = Carbon::now();
        $insertpart->save();
        $notification = array(
            'message' => 'Exam Assigned',
            'alert-type' => 'info'
        );
        return redirect()->route('manageexamassign')->with($notification);
    }//end method
    
    public function EditAssign($id){
        $examassign = AssignExam::findorFail($id);
        $examterm = ExamTerms::select('id','term_name')->get();
        $exampart = Exampart::select('id','name')->get();
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.Assignexam.editassign',compact('examassign','examterm','exampart','classname'));
    }//end method
    
    public function UpdateAssign(Request $request,$id){
        $request->validate([
            'exam_terms'=> 'required',
            'exam_part'=> 'required',
            'individual_part'=> 'required|max:150',
            'marks_term'=> 'required',
            'absent'=> 'required|max:150',
            'class'=> 'required',
        ]);

        $insertpart = AssignExam::find($id);
        $insertpart->exam_terms = $request->exam_terms;
        $insertpart->exam_part = $request->exam_part;
        $insertpart->individual_part = $request->individual_part;
        $insertpart->marks_term = $request->marks_term;
        $insertpart->absent = $request->absent;
        $insertpart->class = $request->class;
        $insertpart->updated_by = Auth::id();
        $insertpart->updated_at = Carbon::now();
        $insertpart->update();
        $notification = array(
            'message' => 'Exam Assigned Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('manageexamassign')->with($notification);
    }//end method

    public function ShowAssign($id){
        $examassign = AssignExam::findorFail($id);
        return view('backend.Examsetting.Assignexam.showassign',compact('examassign'));
    }//end method

    public function DeleteAssign($id){
        $examassign = AssignExam::findorFail($id);
        $examassign->delete();
        $notification = array(
            'message' => 'Exam Assign Deleted',
            'alert-type' => 'error'
        );
        return redirect()->route('manageexamassign')->with($notification);
    }//end method 
    




    
    
    

    

    






    
    
    // EXAM WORKINGDAYS
    
    public function Manageexamworkingdays(){
        $examworkings = Examworkingdays::latest()->get();
        return view('backend.Examsetting.Workingdays.manageexamworking',compact('examworkings'));
    }//end method
    public function Addexamworkingdays(){
        $examterm = ExamTerms::select('id','term_name')->get();
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.Workingdays.addexamworking',compact('examterm','classname'));
    }//end method

    public function InsertWorking(Request $request){
        $request->validate([
            'exam_terms'=> 'required',
            'class'=> 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'working_days'=> 'required|max:150',
        ]);
    
        $insertpart = new Examworkingdays();
        $insertpart->exam_terms = $request->exam_terms;
        $insertpart->start_date = $request->start_date;
        $insertpart->end_date = $request->end_date;
        $insertpart->working_days = $request->working_days;
        $insertpart->class = $request->class;
        $insertpart->created_by = Auth::id();
        $insertpart->created_at = Carbon::now();
        $insertpart->save();
        $notification = array(
            'message' => 'Exam Working Added',
            'alert-type' => 'success'
        );
        return redirect()->route('manageexamworkingdays')->with($notification);
    }//end method
    
    public function Editworking($id){
        $examassign = Examworkingdays::findorFail($id);
        $examterm = ExamTerms::select('id','term_name')->get();
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.Workingdays.editexamworking',compact('examassign','examterm','classname'));
    }//end method
    
    public function Updateworking(Request $request,$id){
        $request->validate([
            'exam_terms'=> 'required',
            'class'=> 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'working_days'=> 'required|max:150',
        ]);
    
        $insertpart = Examworkingdays::find($id);
        $insertpart->exam_terms = $request->exam_terms;
        $insertpart->start_date = $request->start_date;
        $insertpart->end_date = $request->end_date;
        $insertpart->working_days = $request->working_days;
        $insertpart->class = $request->class;
        $insertpart->updated_by = Auth::id();
        $insertpart->updated_at = Carbon::now();
        $insertpart->update();
        $notification = array(
            'message' => 'Exam Working Updated',
            'alert-type' => 'info'
        );
        return redirect()->route('manageexamworkingdays')->with($notification);
    }//end method
    public function Showworking($id){
        $examassign = Examworkingdays::findorFail($id);
        return view('backend.Examsetting.Workingdays.showexamworking',compact('examassign'));
    }//end method

    public function Deleteworking($id){
        $examassign = Examworkingdays::findorFail($id);
        $examassign->delete();
        $notification = array(
            'message' => 'Exam Working Deleted',
            'alert-type' => 'error'
        );
        return redirect()->route('manageexamworkingdays')->with($notification);
    }//end method 
    
   
//    RESULT SETTING
    public function ResultSetting(){
        return view('Examsetting.resultsetting');
    }//end method

    //    Exam ELIGIBILITY
    public function ExamEligibility(){
        return view('Examsetting.exameligibility');
    }//end method
    
    //    Exam SeatPlan
    public function ExamSeatplan(){
        return view('Examsetting.examseatplan');
    }//end method


    //    Exam Attendance
    public function ExamAttendance(){
        return view('Examsetting.examattendance');
    }//end method

    //    Exam Attendance
    public function ExamattenSubject(){
        return view('Examsetting.examattensubject');
    }//end method
    public function ExamattenExam(){
        return view('Examsetting.examattenexam');
    }//end method

}
