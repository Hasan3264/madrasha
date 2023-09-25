<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddMenu extends Model
{
    use HasFactory;

    protected $table = 'add_menu';
    protected $fillable = [
        'title'
    ];

}
