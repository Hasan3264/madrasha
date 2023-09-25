<?php

namespace App\Http\Controllers\backend\Promotion;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PromorionTwoController extends Controller
{
    public function sendCustomesms()
    {
        return view('backend.promotonal_module.sendCustomeSms');
    }
    public function sendDetailsReport()
    {
        return view('backend.promotonal_module.sendDetailsReport');
    }
}
