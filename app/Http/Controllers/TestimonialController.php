<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Testimonial = Testimonial::all();
         return view('backend.website_module.Testimonial',[
            'Testimonial' => $Testimonial,
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.website_module.add_folder.add_testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */

      protected $rules = [
        'name' => ['required', 'unique:testimonials'],
        'designation' => ['required', 'unique:testimonials'],
        'photo' => ['required', 'unique:testimonials', 'mimes:jpeg,png,jpg'],
        'comment' => ['required'],
    ];
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $ids = Testimonial::insertGetId([
            'name' => $request->name,
            'designation' => $request->designation,
            'photo' => 'ok',
            'comment' => $request->comment,
            'created_at' => Carbon::now(),
         ]);
        $uploded_file = $request->photo;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        Image::make($uploded_file)->resize(200,100)->save(public_path('/uploads/website/testimonial/' . $file_name));
        Testimonial::findOrFail($ids)->update([
            'photo' => $file_name,
        ]);


      return  Redirect::route('testimonials.index')->with('success', 'Updated Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          Testimonial::findOrFail($id)->delete();
         return back()->with('success','Deleted successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $findId = Testimonial::findOrFail($id);
            return view('backend.website_module.edit.add_testimonial',[
                'findId' => $findId,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, $this->rules);
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'ok';
        // Testimonial::findOrFail($id)->delete();
        // return back()->with('success','Deleted successfully!');
    }
}
