<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventmanag extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
            'date',
            'details',
            'status',
            'pv',
    ];
}
