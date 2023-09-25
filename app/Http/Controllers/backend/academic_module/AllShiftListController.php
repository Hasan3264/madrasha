<?php

namespace App\Http\Controllers\backend\academic_module;



use App\Http\Controllers\Controller;
use App\Models\academic_module\AllShift;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\academic_module\mediumacademic as AllMedium;


class AllShiftListController extends Controller
{

    ////// All Shift List////////
    public function AllShiftList(){

        $all_shifts = AllShift::get();
        return view('backend.academic_module.all_shift.all_shift_list',compact('all_shifts'));

    }//end method


    ////// All Shift List////////
    public function AddShift(){
        $all_medium = AllMedium::get();
        return view('backend.academic_module.all_shift.add_shift',compact('all_medium'));

    }//end method


    ////// Store Shift List////////
    public function StoreShift(Request $request){


        // $request->validate([
        //     'product_code' => 'unique:products',
        // ],[
        //     'product_code.unique' => 'Product code Must Be Unique'
        // ]);

        AllShift::insert([
            'medium_name' => $request->medium_name,
            'shift_name' => $request->shift_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Shift Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-shift-list')->with($notification);

    }//end method

    ////// edit Shift List////////
    public function EditShift($id){

        $shift_data = AllShift::findOrFail($id);
        $all_medium = AllMedium::get();
        return view('backend.academic_module.all_shift.edit_shift',compact('shift_data','all_medium'));

    }//end method

    ////// update Shift List////////
    public function UpdateShift(Request $request){

        $shift_id = $request->shift_id;

        AllShift::findOrFail($shift_id)->Update([
            'medium_name' => $request->medium_name,
            'shift_name' => $request->shift_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Shift Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-shift-list')->with($notification);

    }//end method

        ////// delete Shift List////////
    public function DeleteShift($id){

        AllShift::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Shift Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-shift-list')->with($notification);


    }//end method


        ////// View Shift List////////
    public function ShiftView($id){

        $shift_data = AllShift::findOrFail($id);


        // dd( Auth::user()->name );

        return view('backend.academic_module.all_shift.view_shift',compact('shift_data'));

    }//end method

}
