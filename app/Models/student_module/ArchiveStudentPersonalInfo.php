<?php

namespace App\Models\student_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveStudentPersonalInfo extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function StudentAdmit(){
        return $this->belongsTo(ArchiveStudentAdmission::class,'StudentInfo_id','id');
    }
}
