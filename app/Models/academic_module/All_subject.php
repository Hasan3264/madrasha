<?php

namespace App\Models\academic_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All_subject extends Model
{
    use HasFactory;
    protected $guarded =[];
     protected $fillable = [
        'medium_id',
        'class_id',
        'combine_name',
        'name',
        'code',
        'combine_name',
        'full_mark',
        'status',
        'result_type'
    ];
    function relation_class()
    {
        return $this->belongsTo(AllClass::class, 'class_id');
    }
    function relation_medium()
    {
        return $this->belongsTo(mediumacademic::class, 'medium_id');
    }
}
