<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCareer extends Model
{
    use HasFactory;

    protected $table = 'add_career';
    protected $fillable = [
        'title',
        'deadline',
        'details',
        'file'
    ];

}
