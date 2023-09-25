<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use App\Models\Working_shift;
use Illuminate\Http\Request;
use Carbon\Carbon;
class WorkingShiftController extends Controller
{
    public function allWorkingShifts()
    {
        $Working_shifts = Working_shift::all();
        return view('backend.hr_module.working_shift.working_shift',[
            'working_shifts' => $Working_shifts,
        ]);
    }
    public function addWorkingShift()
    {
        return view('backend.hr_module.working_shift.add_working_shift');
    }
    public function showWorkingShift($id)
    {
        $findId = Working_shift::findOrFail($id);
        return view('backend.hr_module.working_shift.working_shift_view',[
            'findId' => $findId,
        ]);
    }
    public function editWorkingShift($id)
    {   $findId = Working_shift::findOrFail($id);
        return view('backend.hr_module.working_shift.working_shift_edit',[
        'findId' => $findId,
        ]);
    }

    //development part START
             protected $rules = [
                'name' => ['required', 'unique:working_shifts'],
                's_time' => ['required'],
                'e_time' => ['required'],
            ];

    public function input(Request $request){
         $this->validate($request, $this->rules);
          Working_shift::insert([
              'name' => $request->name,
              's_time' => $request->s_time,
              'e_time' => $request->e_time,
              'created_at' => carbon::now(),
          ]);
          return redirect(route('workingshifts'))->with('success', 'Added Successfully!');
    }
    public function edit(Request $request){
       $this->validate($request, $this->rules);
       Working_shift::findOrFail($request->shift_id)->update([
               'name' => $request->name,
              's_time' => $request->s_time,
              'e_time' => $request->e_time,
              'updated_at' => carbon::now(),
       ]);
        return redirect(route('workingshifts'))->with('success', 'Updated Successfully!');
    }
    public function delete(Request $request){
        Working_shift::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }

}
