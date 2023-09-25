<?php

namespace App\Http\Controllers;

use App\Models\ganarel_information;
use App\Models\institute;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
class InstituteController extends Controller
{
    public function index(){
        return view('backend.institute.index');
    }

    public function input(Request $request){
        $request->validate([
            'facebook' => ['required', 'unique:institutes'],
            'youtube' => ['required', 'unique:institutes'],
        ]);
        
        institute::insert([
           'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Course added successfully!');
    }
    public function ganarel_input(Request $request){
        $request->validate([
            'eiin_no' => ['required', 'unique:ganarel_informations'],
            'institute_name' => ['required', 'unique:ganarel_informations'],
            'slogan' => ['required', 'unique:ganarel_informations'],
            'email' => ['required', 'unique:ganarel_informations'],
            'logo' => ['required', 'unique:ganarel_informations'],
            'short_des' => ['required', 'unique:ganarel_informations'],
            'choosen_des' => ['required', 'unique:ganarel_informations'],
        ]);
      $GANAREL_ID = ganarel_information::insertGetId([
            'eiin_no' => $request->eiin_no,
            'institute_name' => $request->institute_name,
            'slogan' => $request->slogan,
            'email' => $request->email,
            'logo' => 'hhh',
            'short_des' => $request->short_des,
            'choosen_des' => $request->choosen_des,
            'created_at' => Carbon::now(),
      ]);
        $uploded2_file = $request->logo;
        $extentaion2 = $uploded2_file->getClientOriginalExtension();
        $file_name2 = $GANAREL_ID . '.' . $extentaion2;
        Image::make($uploded2_file)->resize(500, 500)->save(public_path('/uploads/backend/logo/' . $file_name2));
        ganarel_information::find($GANAREL_ID)->update([
            'logo' => $file_name2,
        ]);
        return back()->with('success','Added successfully!');
    }
}
