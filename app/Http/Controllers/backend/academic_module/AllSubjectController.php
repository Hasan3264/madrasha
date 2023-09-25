<?php

namespace App\Http\Controllers\backend\academic_module;

use App\Http\Controllers\Controller;
use App\Models\academic_module\All_subject;
use App\Models\academic_module\AllClass;
use App\Models\academic_module\mediumacademic as AllMedium;
use App\Models\user_type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AllSubjectController extends Controller
{
    public function AllSubject(){
        $all_subjects = All_subject::all();
         return view('backend.academic_module.allsubject.index',[
            'all_subjects' => $all_subjects,
         ]);
    }
    public function AddSubject(){
       $all_medium = AllMedium::all();
       $casses = AllClass::all();
       $all_subjects = All_subject::all();
        return view( 'backend.academic_module.allsubject.add',[
            'all_medium' => $all_medium,
            'casses' => $casses,
            'all_subjects' => $all_subjects,
        ]);
    }
   public function getclassBYmedium(Request $request){
     $allcalss = AllClass::where('medium_name', $request->medium_id)->get();
      $str='';
     foreach($allcalss as $class){
           $str .='<option value="'.$class->id.'">'.$class->class_name.'</option>';
       }
      echo $str;
   }

    protected $rules = [
        'medium_id' => ['required'],
        'class_id' => ['integer','required'],
        'name' => ['required'],
        'code' => ['required','integer','unique:all_subjects'],
    ];

   public function Storesubject(Request $request){

      $this->validate($request, $this->rules);
      All_subject::insert([
         'medium_id' => $request->medium_id,
         'class_id' => $request->class_id,
         'name' => $request->name,
         'code' => $request->code,
         'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Added Successfully!');
    }

    public function subjectView($id){
        $findId = All_subject::findOrFail($id);
       return view('backend.academic_module.allsubject.show',[
        'findId' => $findId,
       ]);
    }
    public function EditSubject($id){
           $findId = All_subject::findOrFail($id);
            // Example ID as a string
           $idArray = explode(',', $id);
           $all_medium = AllMedium::all();
           $all_subjects = All_subject::whereNotIn('id', $idArray)->get();
           return view('backend.academic_module.allsubject.edit',[
            'findId' => $findId,
            'all_medium' => $all_medium,
            'all_subjects' => $all_subjects
    ]);
    }
    public function Updatesubject(Request $request){
        $this->validate($request, $this->rules);
            All_subject::findOrFail($request->subjct_id)->update([
         'medium_id' => $request->medium_id,
         'class_id' => $request->class_id,
         'name' => $request->name,
         'code' => $request->code,
         'combine_name' => $request->combine_name,
         'full_mark' => $request->full_mark,
         'result_type' => $request->result_type,
         'status' => $request->status,
         'updated_at' => Carbon::now(),
            ]);
        return Redirect::route('all.subject')->with('success', 'Updated Successfully!');
    }
    public function DeleteGroup(Request $request){
           All_subject::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }
}
