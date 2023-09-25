<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careermanage extends Model
{
    use HasFactory;
   protected $fillable = [
      'title',
'dadline',
'details',
'file',
'status',
    ];
}
