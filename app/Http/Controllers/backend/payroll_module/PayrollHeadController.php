<?php

namespace App\Http\Controllers\backend\payroll_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollHeadController extends Controller
{
    public function index(){
    return view('backend.payroll_module.payroll_head.payroll_head');
}
public function show(){
    return view('backend.payroll_module.payroll_head.payroll_head_view');
}
public function add(){
    return view('backend.payroll_module.payroll_head.add_payroll_head');
}
public function edit(){
    return view('backend.payroll_module.payroll_head.payroll_head_edit');
}
}
