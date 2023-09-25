<?php

namespace App\Http\Controllers\backend\resultReport;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResultReportController extends Controller
{
    public function maritList(){
        return view('backend.resultReport.studentMaritList');
    }
    public function reportCard(){
        return view('backend.resultReport.studentReportCard');
    }
    public function Wise(){
        return view('backend.resultReport.studentWiseList');
    }
}
