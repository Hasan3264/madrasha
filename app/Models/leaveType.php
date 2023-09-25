<?php

namespace App\Models;

use App\Models\Backend\hr_module\EmployeeType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaveType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
     protected $fillable = [
        'employee_type',
        'title',
        'short_title',
        'leave_days',
        'status'
        // Add more attributes as needed
    ];

    function relation_type()
    {
        return $this->belongsTo(EmployeeType::class, 'employee_type');
    }
}
