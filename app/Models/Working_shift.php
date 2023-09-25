<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Working_shift extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        's_time',
        'e_time',
        'g_limit',
        'o_limit',
        'r_limit',
        'status',
    ];
}
