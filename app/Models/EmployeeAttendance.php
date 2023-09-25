<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    use HasFactory;
    public function employeeProInfos()
    {
        return $this->belongsTo('App\Models\Backend\hr_module\EmployeeProInfos','emp_code','id');
    }
}
