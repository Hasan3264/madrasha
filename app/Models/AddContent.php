<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddContent extends Model
{
    use HasFactory;

    protected $table = 'add_content';
    protected $fillable = [
        'content',
        'file_upload'
    ];

}
