<?php

namespace App\Models\ExamSetting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\academic_module\AllClass;
use App\Models\User;

class GradeMOdule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function classname(){
       return $this->belongsTo(AllClass::class,'class_name','id');
    }
    public function uusernamecreated(){
      return $this->belongsTo(User::class,'created_at','id');
  }
  public function uusernameupdated(){
      return $this->belongsTo(User::class,'updated_at','id');
  }
}
