<?php

namespace App\Http\Controllers\backend\boucher;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BoucherController extends Controller
{
    public function recive(){
        return view('backend.boucher.recive');
    }
    public function paymnet(){
        return view('backend.boucher.payment');
    }
}
