<?php

namespace App\Models\backend\hr_module;

use App\Models\EmployeeAttendance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProInfos extends Model
{
    use HasFactory;
    public function attendances()
    {
        return $this->hasMany(EmployeeAttendance::class, 'emp_code', 'id');
    }
}
