<?php

namespace App\Http\Controllers\backend\result;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ResultController extends Controller
{
    function blanksheet(){
        return view('backend.result.blankSheet');
    }
    function EntrySubject(){
        return view('backend.result.marksEntrysubject');
    }
    function EntryExam(){
        return view('backend.result.marksEnteryExam');
    }
    function Setting(){
        return view('backend.result.resultSetting');
    }
}
