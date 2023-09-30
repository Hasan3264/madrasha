<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutcontent extends Model
{
    use HasFactory;
    protected $fillable = [
        'manu',
'content',
'status',
    ];
}
