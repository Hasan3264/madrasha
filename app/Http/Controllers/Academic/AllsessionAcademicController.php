<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AllsessionAcademic;
use Carbon\Carbon;
use App\Models\academic_module\mediumacademic;

class AllsessionAcademicController extends Controller
{
    public function AllSection(){
        $allsessions = AllsessionAcademic::orderBy('id','DESC')->get();
        return view('Academic.Allsession.index',compact('allsessions'));
    } //END METHOD


    public function CreateSession(){
        return view('Academic.Allsession.createsession');
    } //END METHOD

    public function Insertsession(Request $request){

        $request->validate([
            'name' => 'required|max:25|min:3',
            'short_code' => 'required|max:12|min:3|regex:/^[a-zA-Z-_0-9]+$/u',
            'physical_year' => 'required|max:5',
            'current_session' => 'required|max:5',
            'status' => 'required',
       ]);

       $insertsession = new AllsessionAcademic();
       $insertsession->name = $request->name;
       $insertsession->short_code = $request->short_code;
       $insertsession->physical_year = $request->physical_year;
       $insertsession->current_session = $request->current_session;
       $insertsession->percentageterms = $request->percentageterms;
       $insertsession->averageterms = $request->averageterms;
       $insertsession->averagesubject = $request->averagesubject;
       $insertsession->status = $request->status;
       $insertsession->created_at = Carbon::now();
       $insertsession->save();
       $notification = array(
        'message' => 'Session Added',
        'alert-type' => 'success'
          );
       return redirect()->route('allsection')->with($notification);
    } //END METHOD

    public function AllSessionEdit($id){
        $editsession = AllsessionAcademic::findOrFail($id);
        return view('Academic.Allsession.editsession',compact('editsession'));
    }//END METHOD

    public function UpdateSessionId(Request $request,$id){

        $request->validate([
            'name' => 'required|max:25|min:3',
            'short_code' => 'required|max:12|min:3|regex:/^[a-zA-Z-_0-9]+$/u',
            'physical_year' => 'required|max:5',
            'current_session' => 'required|max:5',
            'status' => 'required',
       ]);

       $insertsession = AllsessionAcademic::find($id);
       $insertsession->name = $request->name;
       $insertsession->short_code = $request->short_code;
       $insertsession->physical_year = $request->physical_year;
       $insertsession->current_session = $request->current_session;
       $insertsession->percentageterms = $request->percentageterms;
       $insertsession->averageterms = $request->averageterms;
       $insertsession->averagesubject = $request->averagesubject;
       $insertsession->status = $request->status;
       $insertsession->updated_at = Carbon::now();
       $insertsession->update();
       $notification = array(
        'message' => 'Session Updated',
        'alert-type' => 'info'
          );
       return redirect()->route('allsection')->with($notification);
    } //END METHOD

    public function DeleteSessionId($id){
        $did = AllsessionAcademic::find($id);
        $notification = array(
            'message' => 'Session Deleted',
            'alert-type' => 'warning'
              );
        $did->delete();
        return back()->with($notification);
    }//END METHod

    // ALL MEDIUM

    public function AllMedium(){
        $allmediums = mediumacademic::orderBy('id','DESC')->get();
        return view('Academic.Allmedium.index',compact('allmediums'));
    }//end method

    public function CreatemMedium(){
        return view('Academic.Allmedium.createmedium');
    }//end method


    public function InsertMedium(Request $request){
        $request->validate([
            'medium_name' => 'required|max:80|min:3',
            'medium_code' => 'required|max:40|min:3|regex:/^[a-zA-Z-_0-9]+$/u',
            'medium_status' => 'required',
       ]);

       $insertmedium = new mediumacademic();
       $insertmedium->medium_name = $request->medium_name;
       $insertmedium->medium_code = $request->medium_code;
       $insertmedium->medium_status = $request->medium_status;
       $insertmedium->created_at = Carbon::now();
       $insertmedium->save();
       $notification = array(
        'message' => 'Medium Created Done',
        'alert-type' => 'success'
          );
       return redirect()->route('allmedium')->with($notification);
    }//end method

    public function AllmediumEdit($id){
        $editmedium = mediumacademic::findOrFail($id);
        return view('Academic.Allmedium.editmedium',compact('editmedium'));
    }//END METHOD

    public function UpdatemediumId(Request $request,$id){
        $request->validate([
            'medium_name' => 'required|max:80|min:3',
            'medium_code' => 'required|max:40|min:3|regex:/^[a-zA-Z-_0-9]+$/u',
            'medium_status' => 'required',
       ]);

       $insertmedium =  mediumacademic::find($id);
       $insertmedium->medium_name = $request->medium_name;
       $insertmedium->medium_code = $request->medium_code;
       $insertmedium->medium_status = $request->medium_status;
       $insertmedium->created_at = Carbon::now();
       $insertmedium->update();
       $notification = array(
        'message' => 'Medium Updated Done',
        'alert-type' => 'info'
          );
       return redirect()->route('allmedium')->with($notification);
    }//end method

    public function DeletemediumId($id){
        $did = mediumacademic::find($id);
        $notification = array(
            'message' => 'Medium Deleted Done',
            'alert-type' => 'warning'
              );
        $did->delete();
        return back()->with($notification);
    }//END METHod

    // ACADEMIC CALENDER

    public function AcademicCalender(){
        return view('Academic.Calender.academiccalender');
    }//END METHOD

}
