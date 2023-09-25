<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSlideShow extends Model
{
    use HasFactory;

    protected $table = 'add_slide_show';
    protected $fillable=[
        'title',
        'image',
        'description'
    ];
}
