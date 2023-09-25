<?php

namespace App\Http\Controllers\backend\payroll_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeePayscaleController extends Controller
{
    public function index()
    {
        return view('backend.payroll_module.employee_payscale.employee_payscale');
    }
    public function show()
    {
        return view('backend.payroll_module.employee_payscale.employee_payscale_view');
    }
    public function add()
    {
        return view('backend.payroll_module.employee_payscale.add_employee_payscale');
    }
    public function edit()
    {
        return view('backend.payroll_module.employee_payscale.employee_payscale_edit');
    }
}
