<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddNotice extends Model
{
    use HasFactory;

    protected $table = 'add_notice';
    protected $fillable = [
        'title',
        'file_upload',
        'notice'
    ];

}
