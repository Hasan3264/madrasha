<?php

namespace App\Models\academic_module;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
     protected $fillable = [
        'medium_id',
        'class_id',
        'shift_id',
        'section_id',
        'subject_id',
        'teacher_id',
        'routine_day',
        's_time',
        'e_time',
        'brack_time',
        'status',
        // Add more attributes as needed
    ];
   public function getMediumName($id){
        $medium_name =  mediumacademic::where('medium_code', $id)->select('medium_name')->get();
       return $medium_name[0]->medium_name;
    }
    function relation_AllClass()
    {
        return $this->belongsTo(AllClass::class, 'class_id');
    }
    function relation_AllShift()
    {
        return $this->belongsTo(AllShift::class, 'shift_id');
    }
    function relation_AllSection()
    {
        return $this->belongsTo(AllSection::class, 'section_id');
    }
    function relation_AllSubject()
    {
        return $this->belongsTo(All_subject::class, 'subject_id');
    }

}
