<?php

namespace App\Http\Controllers\backend\academic_module;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use App\Models\academic_module\AllGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\academic_module\mediumacademic as AllMedium;

class AllGroupController extends Controller
{
     public function AllGroup(){
        $all_class = new AllClass();
        $all_group = AllGroup::get();
        return view('backend.academic_module.all_group.all_group',compact('all_group','all_class'));
    }//end method

      ////// All Group List////////
    public function AddGroup(){

        $all_class = AllClass::get();
        $all_medium = AllMedium::get();
        return view('backend.academic_module.all_group.add_group',compact('all_class','all_medium'));

    }//end method


    ////// Store Group List////////
    public function StoreGroup(Request $request){
        AllGroup::insert([
            'class_name' => $request->class_name,
            'group_name' => $request->group_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Group Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-group')->with($notification);

    }//end method


    ////// View Group List////////
    public function GroupView($id){

        $group_data = AllGroup::findOrFail($id);
        $all_class = new AllClass();
        return view('backend.academic_module.all_group.view_group',compact('group_data','all_class'));

    }//end method

    ////// edit Group List////////
    public function EditGroup($id){

        $all_group = AllGroup::findOrFail($id);
        $all_class = AllClass::get();
        $class_name = new AllClass();
        $all_medium = AllMedium::get();
        return view('backend.academic_module.all_group.edit_group',compact('all_group','class_name','all_class','all_medium'));

    }//end method

    ////// update Group List////////
    public function UpdateGroup(Request $request){

        $group_id = $request->group_id;

        AllGroup::findOrFail($group_id)->Update([
            'class_name' => $request->class_name,
            'group_name' => $request->group_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Group Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-group')->with($notification);

    }//end method

        ////// delete Group List////////
    public function DeleteGroup($id){

        AllGroup::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Group Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-group')->with($notification);
    }

}
