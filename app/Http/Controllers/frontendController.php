<?php

namespace App\Http\Controllers;

use App\Models\allsts;
use App\Models\apply;
use App\Models\Inputsocialmedia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.index',[
            'facebook' => $facebok,
            'skype' => $skype,
            'you_tube' => $you_tube,
            'linkedin' => $linkedin,
        ]);
    }

    public function applyIndex(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.frontendall.applay',[
            'facebook' => $facebok,
            'skype' => $skype,
            'you_tube' => $you_tube,
            'linkedin' => $linkedin,
        ]);
    }
    public function apply(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'number' => ['required'],
            'address' => ['required'],
            'class' => ['required'],
        ]);
        apply::insert([
            'name' => $request->name,
            'number' => $request->number,
            'address' => $request->address,
            'class' => $request->class,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Updated Successfully!');
    }
    public function deleteapply($id){
        apply::findOrFail($id)->delete();
        return back();
    }
    public function inputsts(Request $request){
         allsts::insert([
             'student' => $request->student,
             'teacher' => $request->teacher,
             'staff' => $request->staff,
        ]);
        return back()->with('success', 'Updated Successfully!');
    }
    public function aboutIndex(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
       return view('frontend.about',[
        'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
       ]);
    }
    public function brakingIndex(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
       return view('frontend.brakingnews',[
        'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
       ]);
    }


    //board Result
    public function boardresult(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.boardResult',[
            'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
        ]);
    }
    public function AcademicBoardresult(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.AcademicResult',[
        'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
        ]);
    }
    public function gallary(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.gallary',[
        'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
        ]);
    }
    public function boarddirector(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.boarddirector',[
        'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
        ]);
    }
    public function notice(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.notice',[
        'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
        ]);
    }
    public function teachers(){
        $facebok = Inputsocialmedia::where('title', 'facebook')->get();
        $skype = Inputsocialmedia::where('title', 'skype')->get();
        $you_tube = Inputsocialmedia::where('title', 'you tube')->get();
        $linkedin = Inputsocialmedia::where('title', 'linkedin')->get();
        return view('frontend.Teachers',[
        'facebook' => $facebok,
        'skype' => $skype,
        'you_tube' => $you_tube,
        'linkedin' => $linkedin,
        ]);
    }


}


