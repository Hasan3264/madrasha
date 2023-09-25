<?php

namespace App\Models\student_attendance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentManualAttendance extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function status($id){

        $attendance =  $this->where('student_id', $id)->where('date',date('Y-m-d'))->select('attendance')->get();
        if(!empty($attendance[0]->attendance)){
            return $attendance[0]->attendance;
        }
        else{
            return "attendance not found";
        }

    }
}
