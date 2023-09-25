<?php

namespace App\Http\Controllers\backend\leave_module;

use Carbon\Carbon;
use App\Models\leave;
use App\Models\leaveType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\hr_module\EmployeeType;
use App\Models\backend\hr_module\EmployeeProInfos;
use App\Models\backend\hr_module\EmployeePersonalInfos;

class LeaveController extends Controller
{
    //////////////////////// Start Leave Type////////////////
    public function LeaveType(){
       $leaveTypes = leaveType::all();
        return view('backend.leave_module.leave_type.leave_type',[
            'leaveTypes' => $leaveTypes,
        ]);
    } //end method

    public function AddLeaveType(){
       $types = EmployeeType::all();
       return view('backend.leave_module.leave_type.add_leave_type',[
        'types' => $types,
       ]);
    }//end method
            protected $rules = [
                'employee_type' => ['required'],
                'title' => ['required'],
                'short_title' => ['required'],
                'leave_days' => ['required', 'integer'],
                'status' => ['required'],
            ];
         public function StoreLeaveType(Request $request){
         $this->validate($request, $this->rules);
             leaveType::insert([
                 'employee_type' => $request->employee_type,
                 'title' => $request->title,
                 'short_title' => $request->short_title,
                 'leave_days' => $request->leave_days,
                 'status' => $request->status,
            ]);
            return redirect(route('leave_type'))->with('success', 'Added Successfully!');
        }//end method

        public function EditLeaveType($id){
            $types = EmployeeType::all();
            $findId = leaveType::findOrFail($id);
            return view('backend.leave_module.leave_type.leave_type_edit',[
                'findId' => $findId,
                'types' => $types,
            ]);
        }//end method

        public function UpdateLeaveType(Request $request){
            $this->validate($request, $this->rules);
            leaveType::findOrFail($request->update_id)->update([
                'employee_type' => $request->employee_type,
                'title' => $request->title,
                'short_title' => $request->short_title,
                'leave_days' => $request->leave_days,
                'status' => $request->status,
            ]);
      return redirect(route('leave_type'))->with('success', 'Added Successfully!');
    }//end method

    public function ViewLeaveType($id){
        $findId = leaveType::findOrFail($id);
       return view('backend.leave_module.leave_type.leave_type_view',[
        'findId' => $findId,
       ]);
    }//end method

    public function DeleteLeaveType(Request $request){
         leaveType::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);

    }//end method

    //////////////////////// End Leave Type////////////////

    //////////////////////// Start Leave Entry////////////////

     public function LeaveEntry(){
          $leaveTypes = leaveType::all();
           $types = EmployeeType::all();
         return view('backend.leave_module.leave_entry',[
            'leaveTypes' => $leaveTypes,
            'types' => $types,
         ]);
   }//end method

   public function findEmp(Request $request){
       $allcalss = EmployeeProInfos::where('emp_type_id', $request->emptype_id)->pluck('emp_id')->toArray();
        $employees = EmployeePersonalInfos::whereIn('emp_id', $allcalss)->get();
        $str = '<option value="">-- Find Employee --</option>';

        foreach ($employees as $employee) {
            $str .= '<option value="' . $employee->id . '">' . $employee->email . '</option>';
        }

        echo $str;

   }

    //////////////////////// End Leave Entry////////////////

    //////////////////////// Start Manage Leave ////////////////


    public function Leave(){
        $leaves = leave::all();
       return view('backend.leave_module.manage_leave.leave',[
        'leaves' => $leaves
       ]);
    }//end method

    public function StoreLeave(Request $request){
        $request->validate([
           'emp_type'=>['required'],
           'emp_id'=>['required'],
           'leave_type'=>['required'],
           'e_date'=>['required'],
           't_days'=>['required'],
           'status'=>['required'],
        ]);
        leave::insert([
          'emp_type' => $request->emp_type,
          'emp_id' => $request->emp_id,
          'leave_type' => $request->leave_type,
          'e_date' => $request->e_date,
          't_days' => $request->t_days,
          'status' => $request->status,
          'created_at' => Carbon::now(),
        ]);
        return redirect(route('leave'))->with('success', 'Added Successfully!');

    }//end method

    public function ViewLeave($id){
        $findId = leave::findOrFail($id);
         return view('backend.leave_module.manage_leave.leave_view',[
           'findId' => $findId,
         ]);
    }//end method
    public function EditLeave($id){
         $leaves = leave::findOrFail($id);
         $leaveTypes = leaveType::all();
           $types = EmployeeType::all();
       return view('backend.leave_module.manage_leave.leave_edit',[
        'leaves' => $leaves,
        'leaveTypes' => $leaveTypes,
        'types' => $types,
       ]);
    }//end method

    public function UpdateLeave(Request $request){
           $request->validate([
           'emp_type'=>['required'],
           'emp_id'=>['required'],
           'leave_type'=>['required'],
           'e_date'=>['required'],
           't_days'=>['required'],
           'status'=>['required'],
        ]);
        leave::findOrFail($request->leave_id)->update([
          'emp_type' => $request->emp_type,
          'emp_id' => $request->emp_id,
          'leave_type' => $request->leave_type,
          'e_date' => $request->e_date,
          't_days' => $request->t_days,
          'status' => $request->status,
          'updated_at' => Carbon::now(),
        ]);
        return redirect(route('leave'))->with('success', 'Updated Successfully!');
    }//end method

    public function DeleteLeave(Request $request){
         leave::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }//end method


    //////////////////////// End  Manage Leave ////////////////
}
