<?php

namespace App\Models;
use App\Models\backend\hr_module\EmployeePersonalInfos;
use App\Models\backend\hr_module\EmployeeType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
     protected $fillable = [
        'emp_type',
        'emp_id',
        'leave_type',
        'e_date',
        't_days',
        'status'
        // Add more attributes as needed
    ];
     function relation_type()
    {
        return $this->belongsTo(EmployeeType::class, 'emp_type');
    }
     function relation_employee()
    {
        return $this->belongsTo(EmployeePersonalInfos::class, 'emp_id');
    }
     function relation_leaveType()
    {
        return $this->belongsTo(leaveType::class, 'leave_type');
    }
}
