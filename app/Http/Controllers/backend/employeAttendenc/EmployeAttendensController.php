<?php

namespace App\Http\Controllers\backend\employeAttendenc;

use App\Http\Controllers\Controller;
use App\Models\backend\hr_module\EmployeePersonalInfos;
use App\Models\backend\hr_module\EmployeeProInfos;
use App\Models\Backend\hr_module\EmployeeType;
use App\Models\EmployeeAttendance;
use App\Models\Working_shift;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class EmployeAttendensController extends Controller
{
    public function  today()
    {
        return view('backend.employeAttendens.today');
    }

    public function  manual()
    {
        $all_types = EmployeeType::all();
        $all_shifts = Working_shift::all();
        $attendance_data = EmployeeAttendance::all()->groupBy(['date']);
        // $attendance_data = EmployeeAttendance::groupBy('employee_attendances.date')->join('employee_pro_infos', 'employee_attendances.emp_id', '=', 'employee_pro_infos.emp_id')
        //     ->join('employee_personal_infos', 'employee_attendances.emp_id', '=', 'employee_personal_infos.emp_id')
        //     ->get(['employee_personal_infos.mobile','employee_pro_infos.designation','employee_attendances.*']);
        return view('backend.employeAttendens.manual', compact('all_types', 'all_shifts', 'attendance_data'));
        // foreach ($attendance_data as $key => $value) {
        //     echo $value;
        //     foreach ($data as $key => $value) {
        //         echo $value;
        //     }
        // }
    }
    public function fetchEmployees(Request $request)
    {
        $id = EmployeeProInfos::where("emp_type_id", $request->Type)->get();
        foreach ($id as $_id)
            $data['employees'][] = EmployeePersonalInfos::where("emp_code", $_id->id)->get(["name", "emp_code"]);
        return response()->json($data);
    }
    public function manualStore(Request $request)
    {
        $request->validate([
            'Type' => 'required',
            'employee' => 'required',
            'date' => 'required'
        ]);

        if ($request->input('leave_holiday') == null) {
            if ($request->input('out_time') == null) {
                $pro_infos = EmployeeProInfos::where("id", $request->employee)->where('emp_type_id', $request->Type)->first();
                $personal_infos = EmployeePersonalInfos::select('name')->where("emp_code", $request->employee)->first();
                $attendance_data = new EmployeeAttendance();
                $attendance_data->employee_name = $personal_infos->name;
                $attendance_data->emp_code = $pro_infos->id;
                $attendance_data->emp_id = $pro_infos->emp_id;
                $attendance_data->emp_type_id = $pro_infos->emp_type_id;
                $attendance_data->desg_id = $pro_infos->desg_id;
                $attendance_data->ws_id = $pro_infos->ws_id;
                $attendance_data->in_time = $request->in_time;
                $attendance_data->out_time = $request->out_time;
                $attendance_data->date = $request->date;
                $attendance_data->leave = $request->leave_holiday;
                if ($request->in_time) {
                    $has_data = EmployeeAttendance::where('emp_code', $request->employee)->where('date', $request->date)->first();
                    if ($has_data) {
                        return Redirect::back()->withErrors(['msg' => 'Invalid Entry']);
                    } else {
                        $attendance_data->attend = "attend";
                        $attendance_data->zone = $request->zone;
                    }
                } else {
                    $has_data = EmployeeAttendance::where('emp_code', $request->employee)->where('date', $request->date)->first();
                    if ($has_data) {
                        return Redirect::back()->withErrors(['msg' => 'Invalid Entry']);
                    } else {
                        $attendance_data->attend = "absent";
                        $attendance_data->zone = "Red";
                    }
                }
                $attendance_data->save();
            } else {
                if ($request->input('in_time') == null) {
                    $has_data = EmployeeAttendance::where('emp_code', $request->employee)->where('date', $request->date)->first();
                    if ($has_data) {
                        $has_data->out_time = $request->out_time;
                        $has_data->update();
                    } else
                        return Redirect::back()->withErrors(['msg' => 'Invalid Entry']);
                } else {
                    $has_data = EmployeeAttendance::where('emp_code', $request->employee)->where('date', $request->date)->first();
                    if ($has_data) {
                        return Redirect::back()->withErrors(['msg' => 'Invalid Entry']);
                    } else {
                        $pro_infos = EmployeeProInfos::where("id", $request->employee)->where('emp_type_id', $request->Type)->first();
                        $personal_infos = EmployeePersonalInfos::select('name')->where("emp_code", $pro_infos->id)->first();
                        $attendance_data = new EmployeeAttendance();
                        $attendance_data->employee_name = $personal_infos->name;
                        $attendance_data->emp_code = $pro_infos->id;
                        $attendance_data->emp_id = $pro_infos->emp_id;
                        $attendance_data->emp_type_id = $pro_infos->emp_type_id;
                        $attendance_data->desg_id = $pro_infos->desg_id;
                        $attendance_data->ws_id = $pro_infos->ws_id;
                        $attendance_data->in_time = $request->in_time;
                        $attendance_data->out_time = $request->out_time;
                        $attendance_data->date = $request->date;
                        $attendance_data->leave = $request->leave_holiday;
                        if ($request->in_time) {
                            $attendance_data->attend = "attend";
                            $attendance_data->zone = $request->zone;
                        } else {
                            $attendance_data->attend = "absent";
                            $attendance_data->zone = "Red";
                        }
                    }
                    $attendance_data->save();
                }
            }
        } else {
            $has_data = EmployeeAttendance::where('emp_code', $request->employee)->where('date', $request->date)->first();
            if ($has_data) {
                return Redirect::back()->withErrors(['msg' => 'Invalid Entry']);
            } else {
                $created_at = Carbon::now();
                $pro_infos = EmployeeProInfos::where("id", $request->employee)->where('emp_type_id', $request->Type)->first();
                $personal_infos = EmployeePersonalInfos::select('name')->where("emp_code", $pro_infos->id)->first();
                $attendance_data = new EmployeeAttendance();
                $attendance_data->employee_name = $personal_infos->name;
                $attendance_data->emp_code = $pro_infos->id;
                $attendance_data->emp_id = $pro_infos->emp_id;
                $attendance_data->emp_type_id = $pro_infos->emp_type_id;
                $attendance_data->desg_id = $pro_infos->desg_id;
                $attendance_data->ws_id = $pro_infos->ws_id;
                $attendance_data->in_time = $created_at->format('H:i:s');
                $attendance_data->out_time = $created_at->format('H:i:s');
                $attendance_data->date = $request->date;
                $attendance_data->leave = $request->leave_holiday;
                $attendance_data->attend = "attend";
                $attendance_data->save();
            }
        }
        return back()->with('success', 'Attendance created successfully!');

        // echo $attendance_data;
    }
    public function  details()
    {
        $all_types = EmployeeType::all();
        // $year = EmployeeAttendance::select('*')->whereMonth('date','02')->whereYear('date','2023')->where('emp_code','2')->get();
        return view('backend.employeAttendens.details_form', compact('all_types'));
        // echo $year;
    }
    public function employeeAttendanceDetails(Request $request)
    {
        $emp_attendance_details = EmployeeAttendance::select('*')->whereMonth('date', $request->month)->whereYear('date', $request->year)->where('emp_code', $request->employee)->get();
        $emp_info = EmployeeProInfos::where('id', $request->employee)->first();
        $emp_personal_info = EmployeePersonalInfos::where('emp_code', $request->employee)->first();
        $months = [
            "01" => "January", "02" => "February", "03" => "March", "04" => "April", "05" => "May", "06" => "June", "07" => "July", "08" => "August", "09" => "September", "10" => "October", "11" => "November", "12" => "December",
        ];
        $month = $months[$request->month];
        $year = $request->year;
        $yellow_zone = $emp_attendance_details->where('zone', 'Yellow')->count();
        $green_zone = $emp_attendance_details->where('zone', 'Green')->count();
        $red_zone = $emp_attendance_details->where('zone', 'Red')->count();
        $leave = $emp_attendance_details->where('leave', 'leave')->count();
        $holiday = $emp_attendance_details->where('leave', 'holiday')->count();
        $absent = $emp_attendance_details->where('attend', 'absent')->count();
        $attend = $emp_attendance_details->where('attend', 'attend')->count();
        return view('backend.employeAttendens.details', compact('emp_attendance_details', 'emp_info', 'emp_personal_info', 'month', 'year', 'yellow_zone', 'green_zone', 'red_zone', 'leave', 'holiday', 'absent', 'attend'));
    }
    public function  dailyDetailsForm()
    {
        $emp_type = EmployeeType::all();
        $shifts = Working_shift::all();
        return view('backend.employeAttendens.dailydetails_form', compact('emp_type', 'shifts'));
    }
    public function dailyDetails(Request $request)
    {
        $attendance_details = EmployeeAttendance::join('designations', 'employee_attendances.desg_id', '=', 'designations.id')
            ->where('employee_attendances.emp_type_id', $request->Type)
            ->where('employee_attendances.ws_id', $request->Shift)
            ->where('employee_attendances.date', $request->date)
            ->select('designations.title as designation_name', 'employee_attendances.*')->get();
        // $day = $request->date->day;
        $day = Carbon::createFromFormat('Y-m-d', $request->date)->format('d');
        $month = Carbon::createFromFormat('Y-m-d', $request->date)->format('F');
        $year = Carbon::createFromFormat('Y-m-d', $request->date)->format('Y');
        return view('backend.employeAttendens.dailydetails', compact('attendance_details', 'day', 'month', 'year'));
    }
    public function  monthlyDetailsForm()
    {
        $emp_type = EmployeeType::all();
        $shifts = Working_shift::all();
        return view('backend.employeAttendens.monthlly_form', compact('emp_type', 'shifts'));
    }
    public function monthlyDetails(Request $request)
    {
        $request->validate([
            'Type' => 'required',
            'Shift' => 'required',
            'month' => 'required',
            'year' => 'required'
        ]);
        $month = $request->month;
        $year = $request->year;
        $type = $request->Type;
        $shift = $request->Shift;
        $distinctEmployees = DB::table('employee_pro_infos')
            ->join('employee_attendances', 'employee_pro_infos.id', '=', 'employee_attendances.emp_code')
            ->select('employee_pro_infos.*', 'employee_attendances.employee_name')
            ->whereMonth('employee_attendances.date', $month)
            ->whereYear('employee_attendances.date', $year)
            ->where('employee_attendances.ws_id', $shift)->where('employee_attendances.emp_type_id', $type)
            ->distinct()
            ->get();

        // Retrieve the attendance data for distinct employees
        $employees = [];
        foreach ($distinctEmployees as $employee) {
            $attendanceData = EmployeeAttendance::selectRaw('SUM(CASE WHEN `attend` = "attend" THEN 1 ELSE 0 END) as attend_count')
                ->selectRaw('SUM(CASE WHEN `attend` = "absent" THEN 1 ELSE 0 END) as absent_count')
                ->selectRaw('SUM(CASE WHEN `leave` = "leave" THEN 1 ELSE 0 END) as leave_count')
                ->selectRaw('SUM(CASE WHEN `leave` = "holiday" THEN 1 ELSE 0 END) as holiday_count')
                ->selectRaw('SUM(CASE WHEN `zone` = "Green" THEN 1 ELSE 0 END) as green_count')
                ->selectRaw('SUM(CASE WHEN `zone` = "Yellow" THEN 1 ELSE 0 END) as yellow_count')
                ->selectRaw('SUM(CASE WHEN `zone` = "Red" THEN 1 ELSE 0 END) as red_count')
                ->where('emp_code', $employee->id)
                ->whereMonth('date', $month)
                ->whereYear('date', $year)
                ->where('employee_attendances.ws_id', $shift)->where('employee_attendances.emp_type_id', $type)
                ->groupBy('emp_code')
                ->first();

            $employee->attend_count = $attendanceData->attend_count;
            $employee->absent_count = $attendanceData->absent_count;
            $employee->leave_count = $attendanceData->leave_count;
            $employee->holiday_count = $attendanceData->holiday_count;
            $employee->green_count = $attendanceData->green_count;
            $employee->yellow_count = $attendanceData->yellow_count;
            $employee->red_count = $attendanceData->red_count;

            $employees[] = $employee;
        }
        $months = [
            "01" => "January", "02" => "February", "03" => "March", "04" => "April", "05" => "May", "06" => "June", "07" => "July", "08" => "August", "09" => "September", "10" => "October", "11" => "November", "12" => "December",
        ];
        $month = $months[$request->month];
        return view('backend.employeAttendens.monthly', compact('employees', 'month', 'year'));
    }
}
