<?php

namespace App\Http\Controllers\backend\Promotion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromorionOneController extends Controller
{
    public function myGroup(){
        return view('backend.promotonal_module.myGroup');
    }
    public function myContuct(){
        return view('backend.promotonal_module.myContuct');
    }
    public function importContuct(){
        return view('backend.promotonal_module.importContuct');
    }
}
