<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;
use App\Models\Manumodel;
use App\Models\Massagecorner;
use App\Models\slideshow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class WebsiteModuleOneController extends Controller
{
    public function slideShow(){
        $slides = slideshow::all();
        return view('backend.website_module.slide_show_list',[
            'slides' => $slides,
        ]);
    }


    public function addSlideShow(){
        return view('backend.website_module.add_folder.add_slide_show');
    }


   public function inputSlideShow(Request $request){
       $request->validate([
          'type' => ['required'],
          'title' => ['required'],
          'image' => ['required','mimes:jpeg,png,jpg'],
          'description' => ['required'],
          'status' => ['required'],
       ]);
      $ids = slideshow::insertGetId([
          'type' => $request->type,
          'title' => $request->title,
          'description' => $request->description,
          'status' => $request->status,
          'photo' => 'ass',
          'created_at' => Carbon::now(),
       ]);

        $uploded_file = $request->image;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        Image::make($uploded_file)->save(public_path('/uploads/website/slideshow/' . $file_name));
        slideshow::find($ids)->update([
            'photo' => $file_name,
        ]);
      return redirect(route('slide_show'))->with('success', 'Updated Successfully!');
   }



   public function slide_show_view($id){
         $findId  = slideshow::findOrFail($id);
         return view('backend.website_module.show.slidshow',[
             'findId' => $findId,
            ]);
        }

    public function slide_show_edit($id){

       $findId  = slideshow::findOrFail($id);
       return view('backend.website_module.edit.slideshow',[
         'findId' => $findId,
       ]);
      }

      public function updateSlideShow(Request $request){
               $request->validate([
          'type' => ['required'],
          'title' => ['required'],
          'image' => ['required','mimes:jpeg,png,jpg'],
          'description' => ['required'],
          'status' => ['required'],
       ]);

        slideshow::findOrFail($request->edit_id)->update([
           'type' => $request->type,
          'title' => $request->title,
          'description' => $request->description,
          'status' => $request->status,
          'updated_at' => Carbon::now(),
        ]);
        $ids = $request->edit_id;
         $slideshow= slideshow::find($ids);
        $delete_from=public_path('/uploads/website/slideshow/'. $slideshow->photo);
        unlink($delete_from);

        $uploded_file = $request->image;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        Image::make($uploded_file)->save(public_path('/uploads/website/slideshow/' . $file_name));
        slideshow::find($ids)->update([
            'photo' => $file_name,
        ]);
      return redirect(route('slide_show'))->with('success', 'Updated Successfully!');
     }

     public function slideShowdelete(Request $request){
        slideshow::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }

//slide show end

public function messageCorner(){
    $massaes = Massagecorner::all();
    return view('backend.website_module.message_corner',[
        'massage' => $massaes,
    ]);
}

public function addMessage(){
    return view('backend.website_module.add_folder.add_message');
}
public function InputMessage(Request $request){
    $request->validate([
       'name' => ['required', 'unique:massagecorners'],
       'designation' => ['required'],
       'photo' => ['required','mimes:jpeg,png,jpg,webp,gif'],
       'rank' => ['required'],
       'status' => ['required'],
    ]);
    $ids = Massagecorner::insertGetId([
       'name' => $request->name,
       'designation' => $request->designation,
       'photo' => 'hss',
       'rank' => $request->rank,
       'status' => $request->status,
       'created_at' => Carbon::now(),
    ]);

        $uploded_file = $request->photo;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        Image::make($uploded_file)->save(public_path('/uploads/website/masagecorner/' . $file_name));
        Massagecorner::find($ids)->update([
            'photo' => $file_name,
        ]);
         return redirect(route('message_corner'))->with('success', 'Updated Successfully!');
}


  public function ViewMessage($ids){
      $findId = Massagecorner::findOrFail($ids);
      return view('backend.website_module.show.massagecorner',[
        'findId' => $findId,
      ]);
  }
  public function EditMessage($id){
      $findId = Massagecorner::findOrFail($id);
      return view('backend.website_module.edit.massagecorner',[
        'findId' => $findId,
      ]);
  }
  public function Updatemassagecorner(Request $request){
      $request->validate([
       'name' => ['required', 'unique:massagecorners'],
       'designation' => ['required'],
       'photo' => ['required','mimes:jpeg,png,jpg,webp,gif'],
       'rank' => ['required'],
       'status' => ['required'],
    ]);

      Massagecorner::findOrFail($request->edit_id)->update([
         'name' => $request->name,
       'designation' => $request->designation,
       'rank' => $request->rank,
       'status' => $request->status,
       'updated_at' => Carbon::now(),
      ]);

        $ids = $request->edit_id;
         $massaes= Massagecorner::find($ids);
        $delete_from=public_path('/uploads/website/masagecorner/'. $massaes->photo);
        unlink($delete_from);

        $uploded_file = $request->photo;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        Image::make($uploded_file)->save(public_path('/uploads/website/masagecorner/' . $file_name));
        Massagecorner::find($ids)->update([
            'photo' => $file_name,
        ]);
      return redirect(route('message_corner'))->with('success', 'Updated Successfully!');

  }


     public function massagecornerDelete(Request $request){
        Massagecorner::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }



    //manu part start



    public function manageMenu(){
        $manus = Manumodel::all();
        return view('backend.website_module.manage_menu',[
            'manus' => $manus
        ]);
    }



    public function addMenu(){
        return view('backend.website_module.add_folder.add_menu');
    }


    public function Inputmanu(Request $request){
       $request->validate([
       'title' => ['required', 'unique:manumodels'],
       'p_manu' => ['required'],
       'position' => ['required'],
       'islastcolume' => ['required'],
       'status' => ['required'],
    ]);



      Manumodel::insert([
         'title' => $request->title,
         'p_manu' => $request->p_manu,
         'position' => $request->position,
         'islastcolume' => $request->islastcolume,
         'status' => $request->status,
         'created_at' => Carbon::now(),
      ]);
     return redirect(route('manage_menu'))->with('success', 'Insertion Successfully!');

    }




    public function ViewManu($id){
          $findId =  Manumodel::findOrFail($id);
          return view('backend.website_module.show.manage_manu',[
            'findId' => $findId,
          ]);
    }



    public function EditManu($id){
          $findId =  Manumodel::findOrFail($id);
          return view('backend.website_module.edit.manage_manu',[
            'findId' => $findId,
          ]);
    }




    public function UpdateManu(Request $request){
         $request->validate([
            'title' => ['required'],
            'p_manu' => ['required'],
            'position' => ['required'],
            'islastcolume' => ['required'],
            'status' => ['required'],
            ]);
          Manumodel::findOrFail($request->edit_id)->update([
                'title' => $request->title,
                'p_manu' => $request->p_manu,
                'position' => $request->position,
                'islastcolume' => $request->islastcolume,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
          ]);
       return redirect(route('manage_menu'))->with('success', 'Updated Successfully!');
    }




  public function DeleteManu(Request $request){
        Manumodel::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
  }
















}
