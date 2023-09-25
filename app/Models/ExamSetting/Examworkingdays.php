<?php

namespace App\Models\ExamSetting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\academic_module\AllClass;
use App\Models\ExamSetting\ExamTerms;
use App\Models\User;

class Examworkingdays extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function uusernamecreated(){
        return $this->belongsTo(User::class,'created_at','id');
    }
    public function uusernameupdated(){
        return $this->belongsTo(User::class,'updated_at','id');
    } 
    public function examterms(){
        return $this->belongsTo(ExamTerms::class,'exam_terms','id');
    } 
    public function clssname(){
        return $this->belongsTo(AllClass::class,'class','id');
    } 
}
