<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardresult extends Model
{
    use HasFactory;
         protected $fillable = [
        'exam_type',
        'year',
        't_student',
        'pass_student',
        'passes',
        't_plass',
        'details',
        'status',
    ];
}
