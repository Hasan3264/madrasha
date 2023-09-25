<?php

namespace App\Models\student_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMigration extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function get(){
        return $this->belongsTo(StudentAdmission::class,'StudentInfo_id','id');
    }
    public function get_name(){
        return $this->hasOne(StudentPersonalInfo::class,'id','StudentInfo_id');
    }
}
