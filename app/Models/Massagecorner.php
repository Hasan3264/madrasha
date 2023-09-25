<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massagecorner extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'name',
        'designation',
        'rank',
        'massage',
        'status'
        // Add more attributes as needed
    ];
}
