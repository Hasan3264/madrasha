<?php

namespace App\Models\student_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPersonalInfo extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function StudentAdmit(){
        return $this->belongsTo(StudentAdmission::class,'StudentInfo_id','id');
    }

    public function getStudentName($id){

        $student_name_en =  StudentPersonalInfo::where('student_id', $id)->select('student_name_en')->get();
        if(!empty($student_name_en[0]->student_name_en)){
            return $student_name_en[0]->student_name_en;
        }
        else{
            return "Name not found";
        }
    }
    public function getStudentPhoto($id){

        $photo =  StudentPersonalInfo::where('student_id', $id)->select('photo')->get();
        if(!empty($photo[0]->photo)){
            return $photo[0]->photo;
        }
        else{
            return "Photo not found";
        }
    }
}
