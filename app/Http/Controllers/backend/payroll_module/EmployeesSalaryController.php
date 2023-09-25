<?php

namespace App\Http\Controllers\backend\payroll_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesSalaryController extends Controller
{
    public function generateSheet()
    {
        return view('backend.payroll_module.generate_salary_sheet');
    }
    public function report()
    {
        return view('backend.payroll_module.employee_salary_report');
    }
    public function payment()
    {
        return view('backend.payroll_module.employee_salary_payment');
    }
    public function payslipPrint()
    {
        return view('backend.payroll_module.employee_pay_slip_print');
    }
}
