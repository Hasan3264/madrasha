<?php

namespace App\Http\Controllers\backend\student_module;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use App\Models\academic_module\AllSection;
use App\Models\academic_module\AllShift;
use App\Models\ganarel_information;
use App\Models\academic_module\mediumacademic as allMedium;
use App\Models\Backend\AllsessionAcademic;
use App\Models\branchdetails;
use App\Models\student_module\StudentAdmission;
use App\Models\student_module\StudentPersonalInfo;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\student_module\ArchiveStudentAdmission;
use App\Models\student_module\ArchiveStudentPersonalInfo;
use App\Models\student_module\StudentMigration;
use Intervention\Image\ImageManagerStatic as Image;

class StudentController extends Controller
{
    public function addForm()
    {
        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_medium = allMedium::get();
        return view("backend.student_module.add_students",compact('all_session','all_class','all_shift','all_section','all_medium'));
    }

    public function StoreStudentInfo(Request $request){

        $student_info= [];
        //student_info
        $student_info['shift_name'] = $request->shift_name;
        $student_info['class_name'] = $request->class_name;
        $student_info['student_id'] = $request->student_id;
        $student_info['roll_number'] = $request->roll_number;
        $student_info['created_at'] = Carbon::now();

        $StudentInfo_id = StudentAdmission::insertGetId($student_info);


        //personal info
        $personal_info =[];
        $personal_info['StudentInfo_id'] = $StudentInfo_id;
        $personal_info['student_name_en'] = $request->student_name_en;
        $personal_info['student_name_bn'] = $request->student_name_bn;
        $personal_info['blood_group'] = $request->blood_group;
        $personal_info['religion'] = $request->religion;
        $personal_info['student_id'] = $request->student_id;
        $personal_info['birth_date'] = $request->birth_date;
        $personal_info['student_identity'] = $request->student_identity;
        $personal_info['nationality'] = $request->nationality;
        $personal_info['gender'] = $request->gender;

        if(!empty($request->file('photo'))){
            $image = $request->file('photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/student_image/' . $image_rename);
            $image_url = 'uploads/backend/student_module/student_image/' . $image_rename;
            $personal_info['photo'] = $image_url;
        }
        $personal_info['phone'] = $request->phone;
        $personal_info['email'] = $request->email;
        $personal_info['present_address'] = $request->present_address;
        $personal_info['permanent_address'] = $request->permanent_address;

        $personal_info['father_name'] = $request->father_name;
        $personal_info['father_phone'] = $request->father_phone;
        $personal_info['father_nid'] = $request->father_nid;
        $personal_info['father_profession'] = $request->father_profession;
        $personal_info['father_designation'] = $request->father_designation;
        $personal_info['father_office_name_address'] = $request->father_office_name_address;
        $personal_info['father_office_contact_no'] = $request->father_office_contact_no;

        if(!empty($request->file('father_photo'))){
            $image = $request->file('father_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/father_image/' . $image_rename);
            $image_url = 'uploads/backend/student_module/father_image/' . $image_rename;
            $personal_info['father_photo'] = $image_url;
        }
        //Mother info
        $personal_info['mother_name'] = $request->mother_name;
        $personal_info['mother_phone'] = $request->mother_phone;
        $personal_info['mother_nid'] = $request->mother_nid;
        $personal_info['mother_profession'] = $request->mother_profession;
        $personal_info['mother_designation'] = $request->mother_designation;
        $personal_info['mother_office_name_address'] = $request->mother_office_name_address;
        $personal_info['mother_office_contact_no'] = $request->mother_office_contact_no;
        if(!empty($request->file('mother_photo'))){
            $image = $request->file('mother_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/mother_image/' . $image_rename);
            $image_url = 'uploads/backend/student_module/mother_image/' . $image_rename;
            $personal_info['mother_photo'] = $image_url;
        }

        // start guardian receiver
        $personal_info['guardian_receiver'] = $request->guardian_receiver;
        $personal_info['guardian_profession'] = $request->guardian_profession;
        $personal_info['guardian_name'] = $request->guardian_name;
        $personal_info['guardian_designation'] = $request->guardian_designation;
        $personal_info['guardian_relation'] = $request->guardian_relation;
        $personal_info['guardian_office_no'] = $request->guardian_office_no;
        $personal_info['guardian_phone'] = $request->guardian_phone;
        $personal_info['guardian_office_name_address'] = $request->guardian_office_name_address;
        $personal_info['status'] = $request->status;
        $personal_info['created_at'] = Carbon::now();
        // END guardian receiver


        StudentPersonalInfo::insert($personal_info);
        $notification = array(
            'message' => 'Student Admitted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }//end method

    public function printForm()
    {
        $institute = ganarel_information::latest()->first();
        $branch = branchdetails::latest()->first();
        return view('backend.student_module.print_admission_form',[
            'institute' => $institute,
            'branch' => $branch,
        ]);
    }

    //end method


    public function GeneratePdf(){
        $branch = branchdetails::latest()->first();
        $institute = ganarel_information::latest()->first();
        $pdf = Pdf::loadView('backend.student_module.admission_form_pdf',[
            'institute' => $institute,
            'branch' => $branch,
        ]);
        return $pdf->download('student_form.pdf');

    }//end method


    public function currentStudentList()
    {
        $student_info = StudentPersonalInfo::get();
        $male = StudentPersonalInfo::where('gender','male')->count();
        $female = StudentPersonalInfo::where('gender','female')->count();
        $all_class = new AllClass();
        return view("backend.student_module.current_students",compact('student_info','male','female','all_class'));
    }

    public function currentStudentView($id){
        $student_info = StudentPersonalInfo::findOrFail($id);
        $all_class = new AllClass();
        $all_medium = AllMedium::get();
        return view('backend/student_module/student_view',compact('student_info','all_class','all_medium'));
    }

    public function currentStudentEdit($id){

        $student_info = StudentPersonalInfo::findOrFail($id);
        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_medium = AllMedium::get();
        return view("backend/student_module/student_edit",compact('student_info','all_session','all_class','all_shift','all_section','all_medium'));
    }

    public function currentStudentUpdate(Request $request){



        $personal_info_id =$request->id;
        $StudentInfo_id =$request->StudentInfo_id;
        $student_info= [];
        //student_info
        $student_info['shift_name'] = $request->shift_name;
        $student_info['class_name'] = $request->class_name;
        $student_info['student_id'] = $request->student_id;
        $student_info['roll_number'] = $request->roll_number;
        $student_info['updated_at'] = Carbon::now();


        //personal info
        $personal_info =[];
        $personal_info['StudentInfo_id'] = $StudentInfo_id;
        $personal_info['student_name_en'] = $request->student_name_en;
        $personal_info['student_name_bn'] = $request->student_name_bn;
        $personal_info['blood_group'] = $request->blood_group;
        $personal_info['religion'] = $request->religion;
        $personal_info['student_identity'] = $request->student_identity;
        $personal_info['student_id'] = $request->student_id;
        $personal_info['birth_date'] = $request->birth_date;
        $personal_info['nationality'] = $request->nationality;
        $personal_info['gender'] = $request->gender;

        if(!empty($request->file('photo'))){
            $image = $request->file('photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/student_image/' . $image_rename);
            $image_url = 'uploads/backend/student_module/student_image/' . $image_rename;
            $personal_info['photo'] = $image_url;
        }
        $personal_info['phone'] = $request->phone;
        $personal_info['email'] = $request->email;
        $personal_info['present_address'] = $request->present_address;
        $personal_info['permanent_address'] = $request->permanent_address;

        $personal_info['father_name'] = $request->father_name;
        $personal_info['father_phone'] = $request->father_phone;
        $personal_info['father_nid'] = $request->father_nid;
        $personal_info['father_profession'] = $request->father_profession;
        $personal_info['father_designation'] = $request->father_designation;
        $personal_info['father_office_name_address'] = $request->father_office_name_address;
        $personal_info['father_office_contact_no'] = $request->father_office_contact_no;

        if(!empty($request->file('father_photo'))){
            $image = $request->file('father_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/father_image/' . $image_rename);
            $image_url = 'uploads/backend/student_module/father_image/' . $image_rename;
            $personal_info['father_photo'] = $image_url;
        }
        //Mother info
        $personal_info['mother_name'] = $request->mother_name;
        $personal_info['mother_phone'] = $request->mother_phone;
        $personal_info['mother_nid'] = $request->mother_nid;
        $personal_info['mother_profession'] = $request->mother_profession;
        $personal_info['mother_designation'] = $request->mother_designation;
        $personal_info['mother_office_name_address'] = $request->mother_office_name_address;
        $personal_info['mother_office_contact_no'] = $request->mother_office_contact_no;
        if(!empty($request->file('mother_photo'))){
            $image = $request->file('mother_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/mother_image/' . $image_rename);
            $image_url = 'uploads/backend/student_module/mother_image/' . $image_rename;
            $personal_info['mother_photo'] = $image_url;
        }

        // start guardian receiver
        $personal_info['guardian_receiver'] = $request->guardian_receiver;
        $personal_info['guardian_profession'] = $request->guardian_profession;
        $personal_info['guardian_name'] = $request->guardian_name;
        $personal_info['guardian_designation'] = $request->guardian_designation;
        $personal_info['guardian_relation'] = $request->guardian_relation;
        $personal_info['guardian_office_no'] = $request->guardian_office_no;
        $personal_info['guardian_phone'] = $request->guardian_phone;
        $personal_info['guardian_office_name_address'] = $request->guardian_office_name_address;
        $personal_info['status'] = $request->status;
        $personal_info['created_at'] = Carbon::now();
        // END guardian receiver

        StudentAdmission::findOrFail($StudentInfo_id)->update($student_info);
        StudentPersonalInfo::findOrFail($personal_info_id)->update($personal_info);
        $notification = array(
            'message' => 'Student Info updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('students.current-students')->with($notification);
    }//end method

    public function DeleteStudentInfo($id){
        StudentPersonalInfo::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Student Info Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }



//////////////// start archive Student ////////////////


    public function archiveStudentList()
    {
        $student_info = ArchiveStudentPersonalInfo::get();
        $male = ArchiveStudentPersonalInfo::where('gender','male')->count();
        $female = ArchiveStudentPersonalInfo::where('gender','female')->count();
        $all_class = new AllClass();
        return view("backend.student_module.archive_students",compact('student_info','male','female','all_class'));
    }

    public function AddArchive()
    {
        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_medium = AllMedium::get();
        return view("backend.student_module.add_archive",compact('all_session','all_class','all_shift','all_section','all_medium'));
    }

    public function StoreArchive(Request $request){

        $student_info= [];
        //student_info
        $student_info['session_name'] = $request->session_name;
        $student_info['shift_name'] = $request->shift_name;
        $student_info['class_name'] = $request->class_name;
        $student_info['section_name'] = $request->section_name;
        $student_info['device_serial'] = $request->device_serial;
        $student_info['student_id'] = $request->student_id;
        $student_info['tracking_id'] = $request->tracking_id;
        $student_info['roll_number'] = $request->roll_number;
        $student_info['rfid_card_no'] = $request->rfid_card_no;
        $student_info['attendance_sms'] = $request->attendance_sms;
        $student_info['created_at'] = Carbon::now();

        $StudentInfo_id = ArchiveStudentAdmission::insertGetId($student_info);


        //personal info
        $personal_info =[];
        $personal_info['StudentInfo_id'] = $StudentInfo_id;
        $personal_info['student_name_en'] = $request->student_name_en;
        $personal_info['student_name_bn'] = $request->student_name_bn;
        $personal_info['blood_group'] = $request->blood_group;
        $personal_info['religion'] = $request->religion;
        $personal_info['device_serial'] = $request->device_serial;
        $personal_info['student_id'] = $request->student_id;
        $personal_info['birth_date'] = $request->birth_date;
        $personal_info['nationality'] = $request->nationality;
        $personal_info['gender'] = $request->gender;

        if(!empty($request->file('photo'))){
            $image = $request->file('photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/archive/student/' . $image_rename);
            $image_url = 'uploads/backend/student_module/archive/student/' . $image_rename;
            $personal_info['photo'] = $image_url;
        }
        $personal_info['phone'] = $request->phone;
        $personal_info['email'] = $request->email;
        $personal_info['present_address'] = $request->present_address;
        $personal_info['permanent_address'] = $request->permanent_address;

        $personal_info['father_name'] = $request->father_name;
        $personal_info['father_phone'] = $request->father_phone;
        $personal_info['father_nid'] = $request->father_nid;
        $personal_info['father_profession'] = $request->father_profession;
        $personal_info['father_designation'] = $request->father_designation;
        $personal_info['father_office_name_address'] = $request->father_office_name_address;
        $personal_info['father_office_contact_no'] = $request->father_office_contact_no;

        if(!empty($request->file('father_photo'))){
            $image = $request->file('father_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/archive/father/' . $image_rename);
            $image_url = 'uploads/backend/student_module/archive/father/' . $image_rename;
            $personal_info['father_photo'] = $image_url;
        }
        //Mother info
        $personal_info['mother_name'] = $request->mother_name;
        $personal_info['mother_phone'] = $request->mother_phone;
        $personal_info['mother_nid'] = $request->mother_nid;
        $personal_info['mother_profession'] = $request->mother_profession;
        $personal_info['mother_designation'] = $request->mother_designation;
        $personal_info['mother_office_name_address'] = $request->mother_office_name_address;
        $personal_info['mother_office_contact_no'] = $request->mother_office_contact_no;
        if(!empty($request->file('mother_photo'))){
            $image = $request->file('mother_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/archive/mother/' . $image_rename);
            $image_url = 'uploads/backend/student_module/archive/mother/' . $image_rename;
            $personal_info['mother_photo'] = $image_url;
        }

        // start guardian receiver
        $personal_info['guardian_receiver'] = $request->guardian_receiver;
        $personal_info['guardian_profession'] = $request->guardian_profession;
        $personal_info['guardian_name'] = $request->guardian_name;
        $personal_info['guardian_designation'] = $request->guardian_designation;
        $personal_info['guardian_relation'] = $request->guardian_relation;
        $personal_info['guardian_office_no'] = $request->guardian_office_no;
        $personal_info['guardian_phone'] = $request->guardian_phone;
        $personal_info['guardian_office_name_address'] = $request->guardian_office_name_address;
        $personal_info['status'] = $request->status;
        $personal_info['created_at'] = Carbon::now();
        // END guardian receiver


        ArchiveStudentPersonalInfo::insert($personal_info);
        $notification = array(
            'message' => 'Student Archive Inserted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('students.archive-students')->with($notification);
    }//end method


    public function ViewArchive($id){
        $student_info = ArchiveStudentPersonalInfo::findOrFail($id);
        $all_class = new AllClass();
        $all_medium = AllMedium::get();
        return view('backend/student_module/archive_view',compact('student_info','all_class','all_medium'));
    }

    public function EditArchive($id){

        $student_info = ArchiveStudentPersonalInfo::findOrFail($id);
        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_medium = AllMedium::get();
        return view("backend/student_module/archive_edit",compact('student_info','all_session','all_class','all_shift','all_section','all_medium'));
    }

    public function ArchiveUpdate(Request $request){

        $personal_info_id =$request->id;
        $StudentInfo_id =$request->StudentInfo_id;
        $student_info= [];
        //student_info
        $student_info['session_name'] = $request->session_name;
        $student_info['shift_name'] = $request->shift_name;
        $student_info['class_name'] = $request->class_name;
        $student_info['section_name'] = $request->section_name;
        $student_info['device_serial'] = $request->device_serial;
        $student_info['student_id'] = $request->student_id;
        $student_info['tracking_id'] = $request->tracking_id;
        $student_info['roll_number'] = $request->roll_number;
        $student_info['rfid_card_no'] = $request->rfid_card_no;
        $student_info['attendance_sms'] = $request->attendance_sms;
        $student_info['created_at'] = Carbon::now();


        //personal info
        $personal_info =[];
        $personal_info['StudentInfo_id'] = $StudentInfo_id;
        $personal_info['student_name_en'] = $request->student_name_en;
        $personal_info['student_name_bn'] = $request->student_name_bn;
        $personal_info['blood_group'] = $request->blood_group;
        $personal_info['religion'] = $request->religion;
        $personal_info['device_serial'] = $request->device_serial;
        $personal_info['student_id'] = $request->student_id;
        $personal_info['birth_date'] = $request->birth_date;
        $personal_info['nationality'] = $request->nationality;
        $personal_info['gender'] = $request->gender;

        if(!empty($request->file('photo'))){
            $image = $request->file('photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/archive/student/' . $image_rename);
            $image_url = 'uploads/backend/student_module/archive/student/' . $image_rename;
            $personal_info['photo'] = $image_url;
        }
        $personal_info['phone'] = $request->phone;
        $personal_info['email'] = $request->email;
        $personal_info['present_address'] = $request->present_address;
        $personal_info['permanent_address'] = $request->permanent_address;

        $personal_info['father_name'] = $request->father_name;
        $personal_info['father_phone'] = $request->father_phone;
        $personal_info['father_nid'] = $request->father_nid;
        $personal_info['father_profession'] = $request->father_profession;
        $personal_info['father_designation'] = $request->father_designation;
        $personal_info['father_office_name_address'] = $request->father_office_name_address;
        $personal_info['father_office_contact_no'] = $request->father_office_contact_no;

        if(!empty($request->file('father_photo'))){
            $image = $request->file('father_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/archive/father/' . $image_rename);
            $image_url = 'uploads/backend/student_module/archive/father/' . $image_rename;
            $personal_info['father_photo'] = $image_url;
        }
        //Mother info
        $personal_info['mother_name'] = $request->mother_name;
        $personal_info['mother_phone'] = $request->mother_phone;
        $personal_info['mother_nid'] = $request->mother_nid;
        $personal_info['mother_profession'] = $request->mother_profession;
        $personal_info['mother_designation'] = $request->mother_designation;
        $personal_info['mother_office_name_address'] = $request->mother_office_name_address;
        $personal_info['mother_office_contact_no'] = $request->mother_office_contact_no;
        if(!empty($request->file('mother_photo'))){
            $image = $request->file('mother_photo');
            $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('uploads/backend/student_module/archive/mother/' . $image_rename);
            $image_url = 'uploads/backend/student_module/archive/mother/' . $image_rename;
            $personal_info['mother_photo'] = $image_url;
        }

        // start guardian receiver
        $personal_info['guardian_receiver'] = $request->guardian_receiver;
        $personal_info['guardian_profession'] = $request->guardian_profession;
        $personal_info['guardian_name'] = $request->guardian_name;
        $personal_info['guardian_designation'] = $request->guardian_designation;
        $personal_info['guardian_relation'] = $request->guardian_relation;
        $personal_info['guardian_office_no'] = $request->guardian_office_no;
        $personal_info['guardian_phone'] = $request->guardian_phone;
        $personal_info['guardian_office_name_address'] = $request->guardian_office_name_address;
        $personal_info['status'] = $request->status;
        $personal_info['created_at'] = Carbon::now();
        // END guardian receiver

        ArchiveStudentAdmission::findOrFail($StudentInfo_id)->update($student_info);
        ArchiveStudentPersonalInfo::findOrFail($personal_info_id)->update($personal_info);
        $notification = array(
            'message' => 'Student Archive updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('students.archive-students')->with($notification);
    }//end method

        public function DeleteArchive($id){
        StudentPersonalInfo::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Student Info Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('students.archive-students')->with($notification);
    }


//////////////// end archive Student ////////////////


    public function currentStudentSearch()
    {
        $student_info = StudentPersonalInfo::get();
        $all_class = new AllClass();
        return view("backend.student_module.current_student_search",compact('student_info','all_class'));
    }
    public function archiveStudentSearch()
    {
        $student_info = ArchiveStudentPersonalInfo::get();
        $all_class = new AllClass();
        return view("backend.student_module.archive_student_search",compact('student_info','all_class'));
    }
    public function studentSwitch()
    {
        return view("backend.student_module.student_switch");
    }


    public function studentMigration()
    {
        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_medium = AllMedium::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_student =StudentPersonalInfo::get();
        $class_name = new AllClass();
        $student_info = new StudentPersonalInfo();
        $new_student = StudentMigration::latest()->get();
        $class = StudentMigration::select('to_class')->first();

        return view("backend.student_module.student_migration",compact('all_session','all_class','all_medium','all_shift','all_section','all_student','new_student','class_name','class','student_info'));
    }

    public function studentMigrationDone(Request $request){


            $session_name =$request->session_name;
            $class_name =$request->class_name;
            $shift_name =$request->shift_name;
            $section_name =$request->section_name;

            $all_student =StudentAdmission::where('session_name',$session_name)
                                                ->where('class_name',$class_name)
                                                ->where('shift_name',$shift_name)
                                                ->where('section_name',$section_name)
                                                ->get();
            foreach($all_student as $item){

                StudentAdmission::findOrFail($item->id)->update([
                    'session_name'=>$request->migrate_session,
                    'class_name'=>$request->migrate_class,
                    'shift_name'=>$request->migrate_shift,
                    'section_name'=>$request->migrate_section,
                ]);
                StudentMigration::insert([
                    'StudentInfo_id'=> $item->id,
                    'student_id'=> $item->student_id,

                    'from_session'=> $item->session_name,
                    'from_class'=> $item->class_name,
                    'from_shift'=> $item->shift_name,
                    'from_section'=> $item->section_name,

                    'to_session'=> $request->migrate_session,
                    'to_class'=> $request->migrate_class,
                    'to_shift'=> $request->migrate_shift,
                    'to_section'=> $request->migrate_section,

                    'created_at'=> Carbon::now(),
                ]);

            }

        $notification = array(
            'message' => 'Student Migration Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('students.migration')->with($notification);

    }

    public function printStudentId()
    {
        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_medium = AllMedium::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_student =StudentPersonalInfo::get();
        return view("backend.student_module.print_student_id",compact('all_session','all_class','all_medium','all_shift','all_section','all_student'));
    }

    public function PrintIdCard(Request $request){

        $request->validate([
            'student' => 'required',
            'session_name' => 'required',
            'shift_name' => 'required',
            'class_name' => 'required',
            'validity_date' => 'required',
            'section_name' => 'required',
        ]);

        $class =$request->class_name;

        $student = $request->student;
        $student_info = StudentPersonalInfo::findOrFail($student);
        $all_class = new AllClass();

        $session_name = $request->session_name;
        $class_name = $all_class->getClassName($class);
        $shift_name =$request->shift_name;
        $section_name =$request->section_name;
        $validity_date = $request->validity_date;
        $establishment = $request->establishment;
        $student_name = $student_info->student_name_en;
        $student_id = $student_info->student_id;
        $student_photo = $student_info->photo;

        $show_session =$request->show_session;
        $show_roll =$request->show_roll;
        $show_blood =$request->show_blood;
        $show_shift =$request->show_shift;
        $show_group =$request->show_group;
        $show_picture =$request->show_picture;

        $pdf = Pdf::loadView("backend.student_module.print_id_card",compact('student_name','student_id','validity_date','student_photo'));
        return $pdf->download('Id_card.pdf');
        // return view("backend.student_module.print_id_card");
    }


    public function biometricExport()
    {
        $all_student = StudentPersonalInfo::distinct()->pluck('device_serial');
        return view("backend.student_module.student_biometric_export",compact('all_student'));
    }

    public function StudentExport(Request $request){

        $request->validate([
            'device_serial' => 'required'
        ]);
        $device_serial =$request->device_serial;
        $all_student = StudentPersonalInfo::where('device_serial',$device_serial)->get();
        $pdf = Pdf::loadView("backend.student_module.student_info_pdf",compact('all_student'));
        return $pdf->download('student_info.pdf');

        // return view("backend.student_module.student_info_pdf",compact('all_student'));
    }



    public function printStudentTestimonial()
    {
        $all_session = AllsessionAcademic::get();
        $all_class = AllClass::get();
        $all_medium = AllMedium::get();
        $all_shift = AllShift::distinct()->pluck('shift_name');
        $all_section = AllSection::get();
        $all_student =StudentPersonalInfo::get();
        return view("backend.student_module.testimonial",compact('all_session','all_class','all_medium','all_shift','all_section','all_student'));
    }
    public function PrintTestimonial(Request $request){


            $class =$request->class_name;
            $shift =$request->shift_name;
            $section =$request->section_name;
            $student = $request->student;
            $student_info = StudentPersonalInfo::findOrFail($student);
            $all_class = new AllClass();

            $student_name = $student_info->student_name_en;
            $father_name = $student_info->father_name;
            $mother_name = $student_info->mother_name;
            $roll_no = $student_info->StudentAdmit->roll_number;
            $class_name = $all_class->getClassName($class);
            $session_name = $request->session_name;
            // $c_gpa=
            $birth_date = $student_info->birth_date;


        $pdf = Pdf::loadView("backend.student_module.print_testimonial",compact('student_name','father_name','mother_name','roll_no','class_name','session_name','birth_date'));
        return $pdf->download('testimonial.pdf');
        // return view("backend.student_module.print_testimonial");
    }
}
