<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examroutine extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'file',
        'description',
    ];
}
