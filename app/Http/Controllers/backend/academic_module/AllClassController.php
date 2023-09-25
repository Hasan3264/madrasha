<?php

namespace App\Http\Controllers\backend\academic_module;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\academic_module\mediumacademic as AllMedium;

class AllClassController extends Controller
{
    ////// All Shift List////////
    public function AllClassList()
    {

        $all_class = AllClass::get();
        return view('backend.academic_module.all_class.all_class_list', compact('all_class'));
    } //end method


    ////// All Shift List////////
    public function AddClass()
    {
        $all_medium = AllMedium::get();
        return view('backend.academic_module.all_class.add_class',[
            'all_medium' => $all_medium,
        ],compact('all_medium'));
    } //end method


    ////// Store Shift List////////
    public function StoreClass(Request $request)
    {


        $request->validate([
            'class_code' => 'required|regex:/\b\d{2}\b/',
        ], [
            'product_code.required' => 'Product code Must Be Unique'
        ]);

        AllClass::insert([
            'medium_name' => $request->medium_name,
            'class_name' => $request->class_name,
            'class_code' => $request->class_code,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Class Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-class-list')->with($notification);
    } //end method

    ////// edit Shift List////////
    public function EditClass($id)
    {

        $class_data = AllClass::findOrFail($id);
        $all_medium = AllMedium::get();

        return view('backend.academic_module.all_class.edit_class', compact('class_data','all_medium'));
    } //end method

    ////// update Shift List////////
    public function UpdateClass(Request $request)
    {

        $class_id = $request->class_id;

        AllClass::findOrFail($class_id)->Update([
            'medium_name' => $request->medium_name,
            'class_name' => $request->class_name,
            'class_code' => $request->class_code,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Class Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-class-list')->with($notification);
    } //end method

    ////// delete Shift List////////
    public function DeleteClass($id)
    {

        AllClass::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Class Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-class-list')->with($notification);
    } //end method


    ////// View Shift List////////
    public function ClassView($id)
    {

        $class_data = AllClass::findOrFail($id);

        return view('backend.academic_module.all_class.class_view', compact('class_data'));
    } //end method
}
