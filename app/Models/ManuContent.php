<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManuContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'manu',
        'content',
        'file',
        'status',
    ];

     function relation_manumodel()
    {
        return $this->belongsTo(Manumodel::class, 'manu');
    }
}
