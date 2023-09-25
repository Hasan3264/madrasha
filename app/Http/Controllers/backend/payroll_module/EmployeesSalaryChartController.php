<?php

namespace App\Http\Controllers\backend\payroll_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesSalaryChartController extends Controller
{
    public function index()
    {
        return view('backend.payroll_module.employees_salary_chart.employee_salary_chart');
    }
    public function show()
    {
        return view('backend.payroll_module.employees_salary_chart.employee_salary_chart_view');
    }
    public function add()
    {
        return view('backend.payroll_module.employees_salary_chart.add_employee_salary_chart');
    }
    public function edit()
    {
        return view('backend.payroll_module.employees_salary_chart.employee_salary_chart_edit');
    }
}
