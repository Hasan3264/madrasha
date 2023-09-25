<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddMessage extends Model
{
    use HasFactory;

    protected $table = 'add_message';
    protected $fillable = [
        'name',
        'designation',
        'photo',
        'message',
        'rank'
    ];

}
