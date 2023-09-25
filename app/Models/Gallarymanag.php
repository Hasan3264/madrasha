<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallarymanag extends Model
{
    use HasFactory;
    protected $fillable = [
        'albtype',
            'title',
            'caption',
             'file',
             'status'
    ];
}
