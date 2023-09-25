<?php

namespace App\Http\Controllers\backend\academic_module;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use App\Models\academic_module\AllSection;
use App\Models\academic_module\AllShift;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\academic_module\mediumacademic as AllMedium;

class AllSectionController extends Controller
{
    public function AllSection(){
        $all_section = AllSection::get();
        $all_class = new AllClass();
        return view('backend.academic_module.all_section.all_section_list',compact('all_section','all_class'));
    }//end method

      ////// All Section List////////
    public function AddSection(){

        $all_medium = AllMedium::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_class = AllClass::get();
        return view('backend.academic_module.all_section.add_section',compact('all_medium','all_shift','all_class'));

    }//end method


    ////// Store Shift List////////
    public function StoreSection(Request $request){

        AllSection::insert([
            'class_name' => $request->class_name,
            'shift_name' => $request->shift_name,
            'name' => $request->name,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Section Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-section')->with($notification);

    }//end method


    ////// View Shift List////////
    public function SectionView($id){

        $section_data = AllSection::findOrFail($id);
        $all_class = new AllClass();

        return view('backend.academic_module.all_section.view_section',compact('section_data','all_class'));

    }//end method

    ////// edit Shift List////////
    public function EditSection($id){

        $section_data = AllSection::findOrFail($id);
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_class = AllClass::get();
        $all_medium = AllMedium::get();

        return view('backend.academic_module.all_section.edit_section',compact('section_data','all_shift','all_class','all_medium'));

    }//end method

    ////// update Shift List////////
    public function UpdateSection(Request $request){

        $section_id = $request->section_id;

        AllSection::findOrFail($section_id)->Update([
            'class_name' => $request->class_name,
            'shift_name' => $request->shift_name,
            'name' => $request->name,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Section Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-section')->with($notification);

    }//end method

        ////// delete Shift List////////
    public function DeleteSection($id){

        AllSection::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Section Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-section')->with($notification);


    }//end method


}
