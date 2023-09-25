<?php

namespace App\Http\Controllers\backend\student_account;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use App\Models\academic_module\AllSection;
use App\Models\academic_module\AllShift;
use App\Models\academic_module\mediumacademic;
use App\Models\Admittionfee;
use App\Models\Backend\AllsessionAcademic;
use App\Models\institute;
use App\Models\monthlyFee;
use App\Models\ganarel_information;
use App\Models\Monthlyfeeamounts;
use App\Models\student_module\StudentAdmission;
use App\Models\student_module\StudentPersonalInfo;
use App\Models\Studentfeedetails;
use App\Models\Studentfees;
use App\Models\Waiverstudent;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class StudentAccountController extends Controller
{
    public function AdmissionFee(){
        $allsession = AllsessionAcademic::all();
        $allshift = AllShift::all();
        $allsection = AllSection::all();
        $mediums =  mediumacademic::all();
        return view('backend.student_account.admission_fee',[
            'mediums' => $mediums,
            'allsession' => $allsession,
            'allshift' => $allshift,
            'allsection' => $allsection
        ]);
    }//end method

     public function getShift(Request $request){
         $allshifts = AllShift::where('medium_name', $request->medium_ids)->get();
            $str='';
            foreach($allshifts as $shift){
                $str .='<option value="'.$shift->id.'">'.$shift->shift_name.'</option>';
            }
            echo $str;
     }


    public function AdmissionFeeInsert(Request $request){
          $request->validate([
            'session_id' => ['required'],
            'medium_id' => ['required'],
            'class_id' => ['required'],
            'shift_id' => ['required'],
            'section_id' => ['required'],
            'gender' => ['required'],
            'fee_amount' => ['required'],
            'fee_type' => ['required'],
        ]);
        Admittionfee::insert([
            'session_id' => $request->session_id,
            'medium_id' => $request->medium_id,
            'class_id' => $request->class_id,
            'shift_id' => $request->shift_id,
            'section_id' => $request->section_id,
            'gender' => $request->gender,
             'fee_type' => $request->fee_type,
             'fee_amount' => $request->fee_amount,
             'created_at' => Carbon::now(),
        ]);
         return back()->with('success', 'Added Successfully!');
    }

     public function monthInsert(Request $request){
          $request->validate([
            'session_id' => ['required'],
            'medium_id' => ['required'],
            'class_id' => ['required'],
            'shift_id' => ['required'],
            'section_id' => ['required'],
            'gender' => ['required'],
            'month' => ['required'],
            'fee_type' => ['required'],
            'tutionfeeamount' => ['required'],
            'tutionfeepayable' => ['required'],
        ]);
        Monthlyfeeamounts::insert([
           'session_id' => $request->session_id,
           'medium_id' => $request ->medium_id,
           'class_id' => $request->class_id,
           'shift_id' => $request->shift_id,
           'section_id' => $request->section_id,
           'gender' => $request->gender,
           'month' => $request->month,
           'fee_type' => $request->fee_type,
           'tutionfeeamount' => $request->tutionfeeamount,
           'tutionfeepayable' => $request->tutionfeepayable,
           'regfeeamount' => $request->regfeeamount,
           'regfeepayable' => $request->regfeepayable,
           'admisstionamount' => $request->admisstionamount,
           'admisstionpayable' => $request->admisstionpayable,
           'examfeeamount' => $request->examfeeamount,
           'examfeepayable' => $request->examfeepayable,
           'total_amount' => $request->total_amount,
           'total_payable' => $request->total_payable,
           'created_at' => Carbon::now(),
        ]);
         return back()->with('success', 'Added Successfully!');
     }




    public function FeeCollection(){

        $allsession = AllsessionAcademic::all();
        $mediums =  mediumacademic::all();
        return view('backend.student_account.fee_collection',[
             'allsession' => $allsession,
            'mediums' => $mediums,
        ]);
    }//end method

    public function FeeReCollection(){


        return view('backend.student_account.fee_recollection');
    }//end method

        public function MonthlyFee(){
       $allsession = AllsessionAcademic::all();
        $allshift = AllShift::all();
        $allsection = AllSection::all();
        $mediums =  mediumacademic::all();

        return view('backend.student_account.monthly_fee',[
              'mediums' => $mediums,
            'allsession' => $allsession,
            'allshift' => $allshift,
            'allsection' => $allsection
        ]);
    }//end method

        public function QuickCollection(){
        $allsession = AllsessionAcademic::all();
        $mediums =  mediumacademic::all();
        return view('backend.student_account.quick_collection',[
               'allsession' => $allsession,
            'mediums' => $mediums,
        ]);
    }//end method

        public function StudentFee(){

        $allsession = AllsessionAcademic::all();
        $mediums =  mediumacademic::all();
        return view('backend.student_account.student_fee',[
            'allsession' => $allsession,
            'mediums' => $mediums,
        ]);
    }//end method
     public function getstudentByClass(Request $request){
        $classes = AllClass::where('id', $request->class_id)->pluck('class_code')->toArray();
         $findallStudent = StudentAdmission::where('class_name', $classes)->pluck('student_id')->toArray();
        $findstudents = StudentPersonalInfo::whereIn('student_id', $findallStudent)->get();
         $str = '<option value="">-- Find Employee --</option>';

        foreach ($findstudents as $student) {
            $str .= '<option value="' . $student->student_id . '">' . $student->student_name_en . '</option>';
        }

        echo $str;
     }

     public function studentFeeInput(Request $request){
         $request->validate([
            'session_id' => ['required'],
            'medium_id' => ['required'],
            'class_id' => ['required'],
            'student_id' => ['required'],
            'month' => ['required', 'unique:studentfees'],
            'tutionfeeamount' => ['required'],
            'tutionfeepayable' => ['required'],
            'total_amount' => ['required'],
            'total_payable' => ['required'],
        ]);
        Studentfees::insert([
               'session_id' => $request->session_id,
               'medium_id' => $request->medium_id,
               'class_id' => $request->class_id,
               'student_id' => $request->student_id,
               'month' => $request->month,
               'tutionfeeamount' => $request->tutionfeeamount,
               'tutionfeepayable' => $request->tutionfeepayable,
               'regfeeamount' => $request->regfeeamount,
               'regfeepayable' => $request->regfeepayable,
               'admisstionamount' => $request->admisstionamount,
               'admisstionpayable' => $request->admisstionpayable,
               'examfeeamount' => $request->examfeeamount,
               'examfeepayable' => $request->examfeepayable,
               'total_amount' => $request->total_amount,
               'total_payable' => $request->total_payable,
               'created_at' => Carbon::now(),
        ]);
        Studentfeedetails::insert([
               'session_id' => $request->session_id,
               'medium_id' => $request->medium_id,
               'class_id' => $request->class_id,
               'student_id' => $request->student_id,
               'month' => $request->month,
                'total_amount' => $request->total_amount,
               'total_payable' => $request->total_payable,
               'paid_amount' => 0,
               'due_amount' => $request->total_payable,
               'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Added Successfully!');
     }



    public function StudentWaiver(){
         $allsession = AllsessionAcademic::all();
        $mediums =  mediumacademic::all();
        return view('backend.student_account.student_waiver',[
            'allsession' => $allsession,
            'mediums' => $mediums,
        ]);
    }//end method

    public function studenWaiverInput(Request $request){
            $request->validate([
            'session_id' => ['required'],
            'medium_id' => ['required'],
            'class_id' => ['required'],
            'student_id' => ['required'],
            'month' => ['required'],
            'fees_type' => ['required'],
            'wavier' => ['required'],
            'status' => ['required'],
        ]);
            if(Waiverstudent::where('session_id', $request->session_id)
        ->where('medium_id', $request->medium_id)
        ->where('class_id', $request->class_id)
        ->where('student_id', $request->student_id)
        ->where('month', $request->month)->exists()){
            return back()->with('error', 'already Waived');
        }else{
            Waiverstudent::insert([
           'session_id' => $request->session_id,
           'medium_id' => $request->medium_id,
           'class_id' => $request->class_id,
           'student_id' => $request->student_id,
           'month' => $request->month,
           'fees_type' => $request->fees_type,
           'wavier' => $request->wavier,
           'status' => $request->status,
           'created_at' => Carbon::now(),
                ]);
                return back()->with('success', 'Added Successfully!');
        }


    }

  public function filtureData(Request $request){
     $request->validate([
            'session_id' => ['required'],
            'medium_id' => ['required'],
            'class_id' => ['required'],
            'student_id' => ['required'],
            'month' => ['required']
        ]);
    $session = $request->session_id;
    $medium = $request->medium_id;
    $class = $request->class_id;
    $student = $request->student_id;
    $month = $request->month;

     $studentDetails = StudentPersonalInfo::where('student_id', $student)->get();
     $studentDetailsAddmit = StudentAdmission::where('student_id', $student)->get();
      $studentfee = Studentfees::where('student_id', $student)
    ->where('session_id', $session)
    ->where('medium_id', $medium)
    ->where('class_id', $class)
    ->where('month', $month)
    ->get();

      $studentwaived = Waiverstudent::where('student_id', $student)
    ->where('session_id', $session)
    ->where('medium_id', $medium)
    ->where('class_id', $class)
    ->where('month', $month)
    ->get();

      $studentfeedet = Studentfeedetails::where('student_id', $student)
    ->where('session_id', $session)
    ->where('medium_id', $medium)
    ->where('class_id', $class)
    ->where('month', $month)
    ->get();
    if($studentDetails->isEmpty()){
       return back()->with('error', 'NOt Find!');
    }
    elseif($studentDetailsAddmit->isempty()){
        return back()->with('error', 'NOt Find!');
    }
    elseif($studentfee->isempty()){
        return back()->with('error', 'NOt Find!');
    }
    elseif($studentfeedet->isempty()){
        return back()->with('error', 'NOt Find!');
    }
    else{
        return view('backend.student_account.quickcollect',[
            'studentDetails' => $studentDetails,
            'studentDetailsAddmit' => $studentDetailsAddmit,
            'studentfee' => $studentfee,
            'studentfeedet' => $studentfeedet,
             'studentwaived' => $studentwaived
        ]);
    }
}
   public function feedetailsupdate(Request $request){
               $feeId = $request->input('fee_id');
              $newValue = $request->input('paid_amount');
              $topvlaue = $request->input('topvlaue');
              $feeDetails = Studentfeedetails::findOrFail($feeId);
    if($newValue <= 0 || $newValue > $topvlaue){
        return redirect(route('quick_collection'))->with('error', 'Input not valid');
    }
    elseif($newValue > 0 && $newValue <= $feeDetails->due_amount){
        $feeDetails->paid_amount = $newValue+$feeDetails->paid_amount; // Replace "column_name" with the name of the column you want to update
        $feeDetails->due_amount = $feeDetails->due_amount - $newValue; // Replace "column_name" with the name of the column you want to update
        $feeDetails->updated_at = Carbon::now();
        $feeDetails->save();

        return redirect(route('quick_collection'))->with('success', 'Column updated successfully!');
    }
    else{
      return redirect(route('quick_collection'))->with('error', 'Input not valid');
    }


   }

    public function printinvoice($id){
        $institute = ganarel_information::latest()->first();
        $studentfeeDetails = Studentfeedetails::findOrFail($id);
        $studentPersonalDEtails = StudentPersonalInfo::where('student_id', $studentfeeDetails->student_id)->get();
        $studentAddmittion = StudentAdmission::where('student_id', $studentfeeDetails->student_id)->get();
        $waived = Waiverstudent::where('student_id', $studentfeeDetails->student_id)
        ->where('month', $studentfeeDetails->month)->get();
         $pdf = Pdf::loadView('backend/student_account/QuickCollectPDF',[
            'studentfeeDetails' => $studentfeeDetails,
            'waived' => $waived,
            'studentPersonalDEtails' => $studentPersonalDEtails,
            'studentAddmittion' => $studentAddmittion,
            'institute' => $institute,
         ]);
        return $pdf->download('StudentPayment.pdf');
        //  return $institute;
    }

}
