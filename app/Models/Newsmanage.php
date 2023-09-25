<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsmanage extends Model
{
    use HasFactory;
     protected $fillable = [
        'news',
        'title',
        'photo',
        'status'
        // Add more attributes as needed
    ];
}
