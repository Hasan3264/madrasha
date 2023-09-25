<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financemodule extends Model
{
    use HasFactory;
   protected $fillable = [
         'actype',
          'acCat',
          'acparents',
          'accode',
          'achead',
          'yarmont',
          'haschild',
          'status',
   ];
}
