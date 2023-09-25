<?php

namespace App\Models\ExamSetting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ExamTerms extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function uusernamecreated(){
        return $this->belongsTo(User::class,'created_at','id');
    }
    public function uusernameupdated(){
        return $this->belongsTo(User::class,'updated_at','id');
    }
}
