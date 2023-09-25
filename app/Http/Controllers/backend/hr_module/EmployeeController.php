<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Helpers\CRMS;
use App\Http\Controllers\Controller;
use App\Models\Backend\hr_module\Designation;
use App\Models\backend\hr_module\EmployeePersonalInfos;
use App\Models\backend\hr_module\EmployeeEduQualifications;
use App\Models\backend\hr_module\EmployeeProInfos;
use App\Models\Backend\hr_module\EmployeeType;
use App\Models\Backend\hr_module\Type;
use App\Models\Working_shift;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class EmployeeController extends Controller
{
    public function allEmployees()
    {
        $emp_infos = EmployeeProInfos::join('employee_types', 'employee_pro_infos.emp_type_id', '=', 'employee_types.id')
            ->join('designations', 'employee_pro_infos.desg_id', '=', 'designations.id')
            ->join('working_shifts', 'employee_pro_infos.ws_id', '=', 'working_shifts.id')
            ->join('employee_personal_infos', 'employee_pro_infos.emp_id', '=', 'employee_personal_infos.emp_id')
            ->get(['employee_personal_infos.*', 'employee_types.name as emp_type', 'designations.title as desg_type', 'working_shifts.name as ws_type', 'employee_pro_infos.*']);
        // $personal_infos = EmployeePersonalInfos::all();
        // $employee_type = EmployeeType::where('id', $pro_infos->emp_type_id)->pluck('name')->first();
        $female_count = $emp_infos->where('gender', 'female')->count();
        $male_count = $emp_infos->where('gender', 'male')->count();
        return view('backend.hr_module.employee.all_employees', compact('emp_infos', 'female_count', 'male_count'));
    }
    public function addEmployee()
    {
        $all_employee_types = EmployeeType::all();
        $all_designations = Designation::all();
        $all_working_shifts = Working_shift::all();
        return view('backend.hr_module.employee.add_employee', compact('all_employee_types', 'all_designations', 'all_working_shifts'));
    }
    public function storeEmployee(Request $request)
    {

        $request->validate([
            'emp_type_id' => ['required', 'max:100'],
            'desg_id' => ['required'],
            'ws_id' => ['required'],
            'rank' => ['required'],
            'joining_date' => ['required'],
            'bank_acc_no' => ['required', 'unique:employee_pro_infos'],
            'prev_inst' => ['required'],
            'prev_des' => ['required'],
            'photo' => ['required'],
            'name' => ['required'],
            'mobile' => ['required', 'unique:employee_personal_infos'],
            'email' => ['required', 'unique:employee_personal_infos'],
            'dob' => ['required'],
            'nid' => ['required', 'unique:employee_personal_infos'],
            'fb_link' => ['required', 'unique:employee_personal_infos'],
            'father_name' => ['required'],
            'mother_name' => ['required'],
            'marital_status' => ['required'],
            'religion' => ['required'],
            'blood_group' => ['required'],
            'gender' => ['required'],
            'present_address' => ['required'],
            'permanent_address' => ['required'],
            'institute_names' => ['required'],
            'countries' => ['required'],
            'major_subjects' => ['required'],
            'degree_names' => ['required'],
        ]);

        $created_time = Carbon::now();
        $employees_check = EmployeeProInfos::first();
        if (is_null($employees_check)) {
            $latest_id = 0;
            $employee_code = CRMS::uniqueNumberConvertor("EMP-", $created_time->year, $latest_id, $request->emp_type_id, $request->desg_id, $request->ws_id);
        } else {
            $latest_id = EmployeeProInfos::orderBy('id', 'desc')->first()->id;
            $employee_code = CRMS::uniqueNumberConvertor("EMP-", $created_time->year, $latest_id, $request->emp_type_id, $request->desg_id, $request->ws_id);
        }


        // Proffessional Information Store
        $emp_type = Designation::where('type_id', $request->emp_type_id)->where('id', $request->desg_id)->first();
        $working_shift = Working_shift::find($request->ws_id);
        $employee = new EmployeeProInfos();
        $employee->emp_type_id = $request->emp_type_id;
        $employee->emp_type = $emp_type->type;
        $employee->designation = $emp_type->title;
        $employee->desg_id = $request->desg_id;
        $employee->shift = $working_shift->name;
        $employee->ws_id = $request->ws_id;
        $employee->rank = $request->rank;
        $employee->emp_id = $employee_code;
        $employee->joining_date = $request->joining_date;
        $employee->bank_acc_no = $request->bank_acc_no;
        $employee->prev_inst = $request->prev_inst;
        $employee->prev_des = $request->prev_des;
        $employee->created_at = $created_time;

        $employee->save();

        // Personal Info Store
        if (!empty($request->file('photo'))) {
            $image = $request->file('photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/hr_module/employee_image/' . $image_rename);
            $image_url = 'uploads/backend/hr_module/employee_image/' . $image_rename;
            $emp_image = $image_url;
        }
        EmployeePersonalInfos::insert([
            'emp_id' => $employee_code,
            'emp_code' => $employee->id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'dob' => $request->dob,
            'nid' => $request->nid,
            'photo' => $emp_image,
            'fb_link' => $request->fb_link,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'marital_status' => $request->marital_status,
            'religion' => $request->religion,
            'blood_group' => $request->blood_group,
            'gender' => $request->gender,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'created_at' => Carbon::now(),
        ]);


        // Educational Info Store
        $length = count($request->degree_names);
        for ($i = 0; $i < $length; $i++) {
            EmployeeEduQualifications::insert([
                'emp_code' => $employee->id,
                'emp_id' => $employee_code,
                'institute_name' => $request->institute_names[$i],
                'country' => $request->countries[$i],
                'major_subject' => $request->major_subjects[$i],
                'degree_name' => $request->degree_names[$i]
            ]);
        }
        return back()->with('success', 'Employee added successfully!');
    }
    public function showEmployee($id)
    {
        $pro_infos = EmployeeProInfos::find($id);
        $personal_infos = EmployeePersonalInfos::where('emp_code', $id)->first();
        $edu_infos = EmployeeEduQualifications::where('emp_code', $id)->get();
        // $emp_infos = DB::join('employee_personal_infos', $id, '=', 'employee_personal_infos.emp_code')
        //             ->join('employee_pro_infos', $id, '=', 'employee_pro_infos.id')
        //     ->get(['employee_personal_infos.*','employee_pro_infos.*']);
        $emptype_details = EmployeeType::where('id', $pro_infos->emp_type_id)->first();
        $designation_details = Designation::where('id', $pro_infos->desg_id)->first();
        $ws_details = Working_shift::where('id', $pro_infos->ws_id)->first();
        return view('backend.hr_module.employee.employee_view', compact('pro_infos', 'personal_infos', 'edu_infos', 'emptype_details', 'designation_details', 'ws_details'));
    }
    public function editEmployee($id)
    {
        $pro_infos = EmployeeProInfos::find($id);
        $personal_infos = EmployeePersonalInfos::where('emp_code', $id)->first();
        // $emp_infos = DB::join('employee_personal_infos', $id, '=', 'employee_personal_infos.emp_code')
        //             ->join('employee_pro_infos', $id, '=', 'employee_pro_infos.id')
        //     ->get(['employee_personal_infos.*','employee_pro_infos.*']);
        $all_emptypes = EmployeeType::all();
        $all_designations = Designation::all();
        $all_working_shifts = Working_shift::all();
        return view('backend.hr_module.employee.employee_edit', compact('pro_infos', 'personal_infos', 'all_emptypes', 'all_designations', 'all_working_shifts'));
    }
    public function updateEmployee(Request $request, $id)
    {
        // Proffessional Information Store
        $employee = EmployeeProInfos::find($id);

        $employee->emp_type_id = $request->emp_type_id;
        $employee->desg_id = $request->desg_id;
        $employee->ws_id = $request->ws_id;
        $employee->rank = $request->rank;
        $employee->joining_date = $request->joining_date;
        $employee->bank_acc_no = $request->bank_acc_no;
        $employee->prev_inst = $request->prev_inst;
        $employee->prev_des = $request->prev_des;
        $employee->updated_at = Carbon::now();

        // Personal Info Store

        $personal_infos = EmployeePersonalInfos::where('emp_code', $id)->first();

        if ($request->hasFile('photo')) {

            if (!empty($request->file('photo'))) {

                if ($personal_infos->photo) {
                    $file_old = $personal_infos->photo;
                    unlink($file_old);
                }
                $image = $request->file('photo');
                $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 300)->save('uploads/backend/hr_module/employee_image/' . $image_rename);
                $image_url = 'uploads/backend/hr_module/employee_image/' . $image_rename;
                $emp_image = $image_url;
            }
        } else {
            $emp_image = $personal_infos->photo;
        }
        $personal_infos->name = $request->name;
        $personal_infos->mobile = $request->mobile;
        $personal_infos->email = $request->email;
        $personal_infos->dob = $request->dob;
        $personal_infos->nid = $request->nid;
        $personal_infos->photo = $emp_image;
        $personal_infos->fb_link = $request->fb_link;
        $personal_infos->father_name = $request->father_name;
        $personal_infos->mother_name = $request->mother_name;
        $personal_infos->marital_status = $request->marital_status;
        $personal_infos->religion = $request->religion;
        $personal_infos->blood_group = $request->blood_group;
        $personal_infos->gender = $request->gender;
        $personal_infos->present_address = $request->present_address;
        $personal_infos->permanent_address = $request->permanent_address;
        $personal_infos->updated_at = Carbon::now();


        $employee->update();
        $personal_infos->update();
        return redirect()->route('all.employees');
    }
    public function deleteEmployee($id)
    {
        $pro_infos = EmployeeProInfos::find($id);
        EmployeePersonalInfos::where('emp_code', $id)->delete();
        EmployeeEduQualifications::where('emp_code', $id)->delete();
        $pro_infos->delete();
        return back()->with('success', 'Employee deleted successfully!');
    }
    public function searchEmployee()
    {
        $all_types = Employeetype::all();
        $all_designations = Designation::all();
        $all_working_shifts = Working_shift::all();
        return view('backend.hr_module.employee.employee_search', compact('all_types', 'all_designations', 'all_working_shifts'));
    }
    public function searchedEmployee(Request $request)
    {
        $request->validate([
            'type' => ['required'],
            'working_shift' => ['required'],
            'designation' => ['required'],
            'gender' => ['required'],
            'marital_status' => ['required'],
            'blood_group' => ['required'],

        ]);
        if ($request->emp_id != '') {
            $pro_info = EmployeePersonalInfos::join('employee_pro_infos', 'employee_pro_infos.id', '=', 'employee_personal_infos.emp_code')
                ->where('employee_pro_infos.emp_type_id', $request->type)
                ->where('employee_pro_infos.ws_id', $request->working_shift)
                ->where('employee_pro_infos.desg_id', $request->designation)
                ->where('employee_personal_infos.gender', $request->gender)
                ->where('employee_personal_infos.marital_status', $request->marital_status)
                ->where('employee_personal_infos.blood_group', $request->blood_group)
                ->where('employee_pro_infos.emp_id', $request->emp_id)
                ->orWhere('employee_personal_infos.dob', $request->dob)->first();
        } else {
            $pro_info = EmployeePersonalInfos::join('employee_pro_infos', 'employee_pro_infos.id', '=', 'employee_personal_infos.emp_code')
                ->where('employee_pro_infos.emp_type_id', $request->type)
                ->where('employee_pro_infos.ws_id', $request->working_shift)
                ->where('employee_pro_infos.desg_id', $request->designation)
                ->where('employee_personal_infos.gender', $request->gender)
                ->where('employee_personal_infos.marital_status', $request->marital_status)
                ->where('employee_personal_infos.blood_group', $request->blood_group)
                ->orWhere('employee_personal_infos.dob', $request->dob)->first();
        }
        // $id = $pro_info->id;
        // $personal_info = EmployeePersonalInfos::where('gender', $request->gender)
        //     ->where('marital_status', $request->marital_status)
        //     ->where('blood_group', $request->blood_group)
        //     ->where('dob', $request->dob)->first();\
        // echo $pro_info;
        if (!empty($pro_info)) {
            return $this->showEmployee($pro_info->id);
        } else
            return Redirect::back()->withErrors(['msg' => 'Employee Not Found']);
    }
    public function employeeID()
    {
        $all_types = EmployeeType::all();
        $all_shifts = Working_shift::all();
        $all_employees = EmployeePersonalInfos::all();
        return view('backend.hr_module.employee.employee_id_card', compact('all_types', 'all_shifts', 'all_employees'));
    }
    public function fetchDesignation(Request $request)
    {
        $data["designations"] = Designation::where("type_id", $request->type_id)->get(["id", "title"]);
        // foreach ($id as $_id)
        //     $data['employees'][] = EmployeePersonalInfos::where("emp_code", $_id->id)->get(["name", "emp_code"]);
        // // array_push($arr1, $arr1);
        // // $data['employees'] = $arr1;
        return response()->json($data);
    }
    public function fetchEmployees(Request $request)
    {
        $id = EmployeeProInfos::where("emp_type_id", $request->type_id)->get();
        foreach ($id as $_id)
            $data['employees'][] = EmployeePersonalInfos::where("emp_code", $_id->id)->get(["name", "emp_code"]);
        // array_push($arr1, $arr1);
        // $data['employees'] = $arr1;
        return response()->json($data);
    }
    // public function employeeIDCard(Request $request)
    // {
    // }
    public function downloadId(Request $request)
    {
        $pro_infos = EmployeeProInfos::where("id", $request->emp_id)->where('emp_type_id', $request->type_id)->where('ws_id', $request->shift_id)->first();
        $personal_infos = EmployeePersonalInfos::where("emp_code", $request->emp_id)->first();
        $designation = Designation::where('id', $pro_infos->desg_id)->first();
        $customPaper = array(0, 0, 820, 1180);
        $pdf = Pdf::loadview('backend.hr_module.employee.employee_id', compact("pro_infos", "personal_infos", "designation"))->setPaper($customPaper, 'portrait');
        return $pdf->download('employeeIDCard.pdf');
    }
    public function exportEmployee()
    {
        return view('backend.hr_module.employee.employee_export');
    }
}
