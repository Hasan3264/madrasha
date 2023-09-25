<?php

namespace App\Http\Controllers\backend\student_attendance;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use App\Models\academic_module\AllSection;
use App\Models\academic_module\AllShift;
use App\Models\academic_module\mediumacademic as allMedium;
use App\Models\Backend\AllsessionAcademic;
use App\Models\student_attendance\StudentAttendance;
use App\Models\student_attendance\StudentManualAttendance;
use App\Models\student_module\StudentAdmission;
use App\Models\student_module\StudentPersonalInfo;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentAttendanceController extends Controller
{

    public function TodayAttendance(){
        $date = date('Y-m-d');
        $today_attendance = StudentAttendance::where('date',$date)->get();
        $student_admission = new StudentAdmission();
        $all_class = new AllClass();
        $student_info = new StudentPersonalInfo();

        return view('backend.student_attendance.today_attendance',compact('today_attendance','student_admission','all_class','student_info'));

    } //method end

    public function ManualAttendance(){

        $all_class = AllClass::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_medium = AllMedium::get();
        $student_info = StudentPersonalInfo::get();
        $attend_status = new StudentManualAttendance();
        return view('backend.student_attendance.manual_attendance',compact('student_info','all_class','all_shift','all_section','all_medium','attend_status'));
    } //method end

    public function ByGroupAttendance(Request $request){
        $all_class = AllClass::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_medium = AllMedium::get();
        $attend_status = new StudentManualAttendance();

           $day =$request->day;
           $class_name =$request->class_name;
           $shift_name = $request->shift_name;
           $section_name = $request->section_name;

           $group = StudentAdmission::where('class_name',$class_name)
                                    ->where('shift_name',$shift_name)
                                    ->where('section_name',$section_name)
                                    ->get();

            // dd($group);
            return view('backend.student_attendance.group_attendance',compact('group','all_class','all_shift','all_section','all_medium','attend_status'));
    }

    public function AllAttendance($id){

        $attend =StudentManualAttendance::where('date',date('Y-m-d'))->first();
        $all_student = StudentAdmission::get();
        if($id ==1 && empty($attend)){
            foreach($all_student as $item){
                StudentManualAttendance::insert([
                    'student_id'=> $item->student_id,
                    'date'=> date('Y-m-d'),
                    'class_name'=> $item->class_name,
                    'shift_name'=> $item->shift_name,
                    'section_name'=> $item->section_name,
                    'attendance'=> 1,
                    'created_at'=> Carbon::now(),
                ]);
            }
            return response()->json(['success'=>'All Student Are Present']);
        }
        if($id ==0){
            $all_student = StudentManualAttendance::where('date',date('Y-m-d'))->get();
            foreach($all_student as $item){
                StudentManualAttendance::findOrFail($item->id)->update([
                    'attendance'=> 0,
                    'created_at'=> Carbon::now(),
                ]);
            }
            return response()->json(['success'=>'All Student Are Absent ']);
        }
        if($id ==1){
            $all_student = StudentManualAttendance::where('date',date('Y-m-d'))->get();
            foreach($all_student as $item){
                StudentManualAttendance::findOrFail($item->id)->update([
                    'attendance'=> 1,
                    'created_at'=> Carbon::now(),
                ]);
            }
            return response()->json(['success'=>'All Student Are Present ']);
        }
    }

public function singleAttendance($id){

    $attend = StudentManualAttendance::where('student_id',$id)->where('date',date('Y-m-d'))->select('attendance')->get();



   if(count($attend) == 0){

           $item = StudentAdmission ::where('student_id',$id)->first();
            StudentManualAttendance::where('student_id',$id)->insert([
                    'student_id'=> $item->student_id,
                    'date'=> date('Y-m-d'),
                    'class_name'=> $item->class_name,
                    'shift_name'=> $item->shift_name,
                    'section_name'=> $item->section_name,
                    'attendance'=> 1,
                    'month'=>Carbon::now()->format('F'),
                    'year'=>Carbon::now()->format('Y'),
                    'created_at'=> Carbon::now(),
                ]);
            return response()->json(['success'=>'Student is Present']);

   }else{
        if($attend[0]->attendance==1){

        //  foreach($all_student as $item){

            StudentManualAttendance::where('student_id',$id)->where('date',date('Y-m-d'))->update([
                    'attendance'=> 0,
                    'created_at'=> Carbon::now(),
                ]);
        // }
            return response()->json(['success'=>'Student is Absent']);
    }
    if($attend[0]->attendance ==0){

        // foreach($all_student as $item){

            StudentManualAttendance::where('student_id',$id)->where('date',date('Y-m-d'))->update([
                    'attendance'=> 1,
                    'created_at'=> Carbon::now(),
                ]);
        // }
            return response()->json(['success'=>'Student is Present Today']);

    }
   }



}


public function AbsentStudent(){
        $date=date('Y-m-d');

        $all_absent = DB::table('student_manual_attendances')
                ->where('date',$date)
                ->where('attendance','0')
                ->get()
                ->groupBy('class_name','shift_name','section_name');

        $total_absent = DB::table('student_manual_attendances')
                ->where('date',$date)
                ->where('attendance','0')
                ->get();
        $student_admission = new StudentAdmission();
        $student_info = new StudentPersonalInfo();
        $all_class = new AllClass();
        $all_medium = new allMedium();
        return view('backend.student_attendance.absent_student_list',compact('all_absent','all_class','all_medium','total_absent','student_admission','student_info'));
    } //method end





    public function AttendanceDetails(){

        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_shift = AllShift::get();
        $all_section = AllSection::get();
        $all_medium = allMedium::get();
        $medium = new allMedium();
        $all_student =StudentPersonalInfo::get();
        $month = StudentManualAttendance::distinct()->pluck('month');
        $year = StudentManualAttendance::distinct()->pluck('year');

        return view('backend.student_attendance.attendance_details',compact('all_session','all_class','all_shift','all_section','all_section','all_medium','all_student','month','year','medium'));
    } //method end

    public function DetailsAttendance(Request $request){

       $validatedData = $request->validate([
            'session_name'=>'required',
            'class_name'=>'required',
            'shift_id'=>'required',
            'section_name'=>'required',
            'student'=>'required',
            'month'=>'required',
            'year'=>'required',
        ],[
            'session_name.required'=>'session name required',
            'class_name.required'=>'class name required',
            'shift_id.required'=>'shift name required',
            'section_name.required'=>'section name required',
            'student.required'=>'student name required',
            'month.required'=>' month is required',
            'year.required'=>'year is required',
        ]
    );

        // $all_session = AllsessionAcademic::get();
        // $all_class = AllClass::get();
        // $all_shift = AllShift::get();
        // $all_section = AllSection::get();
        // $all_medium = allMedium::get();
        // $all_student =StudentPersonalInfo::get();
        // $month = StudentManualAttendance::distinct()->pluck('month');
        // $year = StudentManualAttendance::distinct()->pluck('year');


            $session_name = $request->session_name;
            $class_name = $request->class_name;
            $shift_id = $request->shift_id;
            $section_name = $request->section_name;
            $student = $request->student;
            $get_month = $request->month;
            $get_year = $request->year;

            session()->put('attendance', [
            'session_name' => $session_name,
            'class_name' => $class_name,
            'shift_id' => $shift_id,
            'section_name' => $section_name,
            'student' => $student,
            'get_month' => $get_month,
            'get_year' => $get_year,
            ]);



        $student_name = StudentPersonalInfo::where('id',$student)->get();

        $attendance_details = StudentManualAttendance::where('student_id',$student_name[0]->student_id)->get();
        $attend = StudentManualAttendance::where('student_id',$student_name[0]->student_id)->where('attendance','1')->count();

        $absent = StudentManualAttendance::where('student_id',$student_name[0]->student_id)->where('attendance','0')->count();

        $shift = AllShift::where('id',$shift_id)->get();

        return view('backend.student_attendance.details_attendance',compact('attendance_details','get_month','get_year','student','student_name','attend','absent','shift'));

    }




    public function DailyAttendance(){

        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_shift = AllShift::get();
        $all_section = AllSection::get();
        $all_medium = allMedium::get();
        $all_student =StudentPersonalInfo::get();
        $month = StudentManualAttendance::distinct()->pluck('month');
        $year = StudentManualAttendance::distinct()->pluck('year');

        return view('backend.student_attendance.daily_attendance_summary',compact('all_session','all_class','all_shift','all_section','all_section','all_medium','all_student','month','year'));

    } //method end

    public function AttendanceDaily(Request $request){

            $validatedData = $request->validate([
            'session_name'=>'required',
            'class_name'=>'required',
            'shift_id'=>'required',
            'section_name'=>'required',
            'date'=>'required',
        ],[
            'session_name.required'=>'session name required',
            'class_name.required'=>'class name required',
            'shift_id.required'=>'shift name required',
            'section_name.required'=>'section name required',
            'date.required'=>'Date is required',
        ]
    );

            $session_name = $request->session_name;
            $class_name = $request->class_name;
            $shift_id = $request->shift_id;
            $section_name = $request->section_name;
            $date = $request->date;

            session()->put('daily', [
            'session_name' => $session_name,
            'class_name' => $class_name,
            'shift_id' => $shift_id,
            'section_name' => $section_name,
            'date' => $date,
            ]);



        // $all_session = AllsessionAcademic::get();
        // $all_class = AllClass::get();
        // $all_shift = AllShift::get();
        // $all_section = AllSection::get();
        // $all_medium = allMedium::get();
        // $all_student =StudentPersonalInfo::get();

        $shift = AllShift::where('id',$shift_id)->get();

        $attendance = StudentManualAttendance::where('date',$date)
                                             ->where('class_name',$class_name)
                                             ->where('section_name',$section_name)
                                             ->where('shift_name',$shift[0]->shift_name)
                                             ->get();

        $student_info = new StudentPersonalInfo();
        $admission =new StudentAdmission();

        $d = date('M d Y',strtotime($date));

        $class = new AllClass();
        $shift = AllShift::where('id',$shift_id)->get();

        return view('backend.student_attendance.attendance_details_daily',compact('attendance','d','student_info','admission','class','shift'));



    }

    public function MonthlyAttendance(){

        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_shift = AllShift::get();
        $all_section = AllSection::get();
        $all_medium = allMedium::get();
        $all_student =StudentPersonalInfo::get();
        $month = StudentManualAttendance::distinct()->pluck('month');
        $year = StudentManualAttendance::distinct()->pluck('year');

        return view('backend.student_attendance.monthly_attendance_summary',compact('all_session','all_class','all_shift','all_section','all_section','all_medium','all_student','month','year'));
    } //method end

    public function AttendanceMonthly(Request $request){

        $validatedData = $request->validate([
            'session_name'=>'required',
            'class_name'=>'required',
            'shift_id'=>'required',
            'section_name'=>'required',
            'date'=>'required',
        ],[
            'session_name.required'=>'session name required',
            'class_name.required'=>'class name required',
            'shift_id.required'=>'shift name required',
            'section_name.required'=>'section name required',
            'date.required'=>'Date is required',
        ]
    );

            $session_name = $request->session_name;
            $class_name = $request->class_name;
            $shift_id = $request->shift_id;
            $section_name = $request->section_name;
            $date = $request->date;

            session()->put('monthly', [
            'session_name' => $session_name,
            'class_name' => $class_name,
            'shift_id' => $shift_id,
            'section_name' => $section_name,
            'date' => $date,
            ]);



        // $all_session = AllsessionAcademic::get();
        // $all_class = AllClass::get();
        // $all_shift = AllShift::get();
        // $all_section = AllSection::get();
        // $all_medium = allMedium::get();
        // $all_student =StudentPersonalInfo::get();

        $shift = AllShift::where('id',$shift_id)->get();
        $m = date('F',strtotime($date));
        $attendance = StudentManualAttendance::where('month',$m)
                                             ->where('class_name',$class_name)
                                             ->where('section_name',$section_name)
                                             ->where('shift_name',$shift[0]->shift_name)
                                             ->get();

        $student_info = new StudentPersonalInfo();
        $admission =new StudentAdmission();

        $class = new AllClass();

        return view('backend.student_attendance.attendance_details_monthly',compact('attendance','m','student_info','admission','class','shift'));

    }

    public function DailyAttendancePdf(){
            $data = session()->get('daily');

            $session_name = $data['session_name'];
            $class_name = $data['class_name'];
            $shift_id = $data['shift_id'];
            $section_name = $data['section_name'];
            $date = $data['date'];

            session()->forget('data');


       $shift = AllShift::where('id',$shift_id)->get();

        $attendance = StudentManualAttendance::where('date',$date)
                                             ->where('class_name',$class_name)
                                             ->where('section_name',$section_name)
                                             ->where('shift_name',$shift[0]->shift_name)
                                             ->get();

        $student_info = new StudentPersonalInfo();
        $admission =new StudentAdmission();

        $d = date('M d Y',strtotime($date));

        $class = new AllClass();
        $shift = AllShift::where('id',$shift_id)->get();



        $pdf = Pdf::loadView("backend.student_attendance.daily_attendance_pdf",compact('attendance','d','student_info','admission','class','shift'))->setPaper('A4', 'landscape');
        return $pdf->download('daily_attendance.pdf');
        // return view("backend.student_attendance.daily_attendance_pdf",compact('attendance','d','student_info','admission','class','shift'));
    }

    public function MonthlyAttendancePdf(){

            $data = session()->get('monthly');

            $session_name = $data['session_name'];
            $class_name = $data['class_name'];
            $shift_id = $data['shift_id'];
            $section_name = $data['section_name'];
            $date = $data['date'];

            session()->forget('data');

        $shift = AllShift::where('id',$shift_id)->get();
        $m = date('F',strtotime($date));
        $attendance = StudentManualAttendance::where('month',$m)
                                             ->where('class_name',$class_name)
                                             ->where('section_name',$section_name)
                                             ->where('shift_name',$shift[0]->shift_name)
                                             ->get();

        $student_info = new StudentPersonalInfo();
        $admission =new StudentAdmission();

        $class = new AllClass();
        $shift = AllShift::where('id',$shift_id)->get();

         $pdf = Pdf::loadView('backend.student_attendance.monthly_attendance_pdf',compact('attendance','m','student_info','admission','class','shift'))->setPaper('A4', 'landscape');

        return $pdf->download('monthly_attendance.pdf');

    }



    public function DetailsAttendancePdf(){

    $data = session()->get('attendance');

    $session_name = $data['session_name'];
    $class_name = $data['class_name'];
    $shift_id = $data['shift_id'];
    $section_name = $data['section_name'];
    $student = $data['student'];
    $get_month = $data['get_month'];
    $get_year = $data['get_year'];

    session()->forget('attendance');

        $student_name = StudentPersonalInfo::where('id',$student)->get();

        $attendance_details = StudentManualAttendance::where('student_id',$student_name[0]->student_id)->get();
        $attend = StudentManualAttendance::where('student_id',$student_name[0]->student_id)->where('attendance','1')->count();

        $absent = StudentManualAttendance::where('student_id',$student_name[0]->student_id)->where('attendance','0')->count();

        $shift = AllShift::where('id',$shift_id)->get();

        $pdf = Pdf::loadView('backend.student_attendance.attendance_details_pdf',compact('attendance_details','get_month','get_year','student','student_name','attend','absent','shift'))->setPaper('A4', 'landscape');

        return $pdf->download('attendance_details.pdf');



    }





}
