<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;
use App\Models\Eventmanag;
use App\Models\Gallarymanag;
use App\Models\Newsmanage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class WebsiteModuleThreeController extends Controller
{
    public function manageGallery(){
        $gallerys = Gallarymanag::all();
        return view('backend.website_module.manage_gallery',[
            'gallerys' => $gallerys
        ]);
    }
    public function addGallery(){
        return view('backend.website_module.add_folder.add_gallery');
    }

    public function inputGallery(Request $request){
         $request->validate([
            'name' => ['required'],
            'caption' => ['required'],
             'file' => ['required', 'mimes:jpeg,png,jpg'],
         ]);
         $ids = Gallarymanag::insertGetId([
              'name' => $request->name,
              'caption' => $request->caption,
              'file' => 'ok',
              'created_at' => Carbon::now(),
         ]);
        $uploded_file = $request->file;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        Image::make($uploded_file)->resize(1200,400)->save(public_path('/uploads/website/gallerymanage/' . $file_name));
        Gallarymanag::find($ids)->update([
            'file' => $file_name,
        ]);
      return redirect(route('manage_gallery'))->with('success', 'Inserted Successfully!');
    }
    public function DeleteGallery(Request $request){
           Gallarymanag::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }
    public function editGallery($id){
          $findid= Gallarymanag::findOrFail($id);
          return view('backend.website_module.edit.add_gallery',[
            'findId' => $findid,
          ]);
    }
    public function UpdateGallery(Request $request){
        $request->validate([
            'name' => ['required'],
            'caption' => ['required'],
             'file' => ['required', 'mimes:jpeg,png,jpg'],
         ]);
           Gallarymanag::findOrFail($request->edit_id)->update([
            'name' => $request->name,
            'caption' => $request->caption,
              'updated_at' => Carbon::now(),
           ]);

             $ids = $request->edit_id;
             $slideshow= Gallarymanag::find($ids);
             $delete_from=public_path('/uploads/website/gallerymanage/'. $slideshow->file);
             unlink($delete_from);

            $uploded_file = $request->file;
            $extentaion = $uploded_file->getClientOriginalExtension();
            $file_name = $ids . '.' . $extentaion;
            Image::make($uploded_file)->resize(1200,400)->save(public_path('/uploads/website/gallerymanage/' . $file_name));
            Gallarymanag::find($ids)->update([
                'file' => $file_name,
            ]);
           return redirect(route('manage_gallery'))->with('success', 'Update Successfully!');

    }
    public function viewGallery($id){
         $findId= Gallarymanag::findOrFail($id);
         return view('backend.website_module.show.gallery',[
            'findId' =>$findId
         ]);
    }





  // gallery end
 // manage news


    public function manageNews(){
     $newges = Newsmanage::all();
     return view('backend.website_module.manage_news',[
         'newges' => $newges,
        ]);
    }
    public function addNews(){
        return view('backend.website_module.add_folder.add_news');
    }

    public function inputNews(Request $request){
        $request->validate([
            'title' => ['required'],
            'photo' => ['required', 'mimes:jpg,png,gif,jpeg'],
            'news' => ['required'],
            'status' => ['required'],
        ]);
        $ids = Newsmanage::insertGetId([
            'title' => $request->title,
            'photo' =>'ok',
            'news' => $request->news,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);
        $uploded_file = $request->photo;
        $extentaion = $uploded_file->getClientOriginalExtension();
            $file_name = $ids . '.' . $extentaion;
            Image::make($uploded_file)->resize(360,260)->save(public_path('/uploads/website/newsmanage/' . $file_name));
            Newsmanage::find($ids)->update([
                'photo' => $file_name,
            ]);
            return redirect(route('manage_news'))->with('success', 'Insert Successfully!');
        }
    public function EditNews($id){
         $findId = Newsmanage::findOrFail($id);
        return view('backend.website_module.edit.add_news',[
            'findId' => $findId,
        ]);
      }
    public function UpdateNews(Request $request){
         $request->validate([
           'title' => ['required'],
           'photo' => ['required', 'mimes:jpg,png,gif,jpeg'],
           'news' => ['required'],
           'status' => ['required'],
        ]);
        Newsmanage::findOrFail($request->edit_id)->update([
          'title' => $request->title,
           'news' => $request->news,
           'status' => $request->status,
           'updated_at' => Carbon::now(),
        ]);
        $ids = $request->edit_id;
        $slideshow= Newsmanage::find($ids);
             $delete_from=public_path('/uploads/website/newsmanage/'. $slideshow->photo);
             unlink($delete_from);

             $uploded_file = $request->photo;
             $extentaion = $uploded_file->getClientOriginalExtension();
             $file_name = $ids . '.' . $extentaion;
             Image::make($uploded_file)->resize(360,260)->save(public_path('/uploads/website/newsmanage/' . $file_name));
             Newsmanage::find($ids)->update([
                 'photo' => $file_name,
            ]);
            return redirect(route('manage_news'))->with('success', 'Update Successfully!');
    }
     public function ViewNews($ids){
         $findId = Newsmanage::findOrFail($ids);
         return view('backend.website_module.show.newsmange',[
           'findId' => $findId,
         ]);
     }


     public function Deletenews(Request $request){
           Newsmanage::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }

    //add section



    public function addEvent(){

        return view('backend.website_module.add_folder.add_event');
    }

    public function manageEvent(){
         $events = Eventmanag::all();
        return view('backend.website_module.manage_event',[
            'events' => $events,
        ]);
    }
    public function InputEvent(Request $request){
          $request->validate([
            'name' => ['required'],
            'date' => ['required', 'date'],
            'details' => ['required'],
            'pv' => ['required', 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi,image/jpeg,image/png,image/jpg'],
            'status' => ['required'],
          ]);
          $ids =  Eventmanag::insertGetId([
            'name' => $request->name,
            'date' => $request->date,
            'details' => $request->details,
            'pv' =>'pv',
            'status' => $request->status,
            'created_at' => Carbon::now(),
          ]);
           $uploded_file = $request->pv;
            $extentaion = $uploded_file->getClientOriginalExtension();
            $file_name = $ids . '.' . $extentaion;
            Image::make($uploded_file)->save(public_path('/uploads/website/event/' . $file_name));
            Eventmanag::find($ids)->update([
                'pv' => $file_name,
            ]);
          return redirect(route('manage_event'))->with('success', 'Insert Successfully!');
    }
    public function EditEvent($id ){
        $findId = Eventmanag::findOrFail($id);
        return view('backend.website_module.edit.add_event',[
            'findId' => $findId,
        ]);
    }
    public function UpdateEvent(Request $request){
           $request->validate([
            'name' => ['required'],
            'date' => ['required', 'date'],
            'details' => ['required'],
            'pv' => ['required', 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi,image/jpeg,image/png,image/jpg'],
            'status' => ['required'],
          ]);
          Eventmanag::findOrFail($request->edit_id)->update([
            'name' => $request->name,
            'date' => $request->date,
            'details' => $request->details,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now(),
          ]);

          $ids = $request->edit_id;
          $slideshow= Eventmanag::find($ids);
               $delete_from=public_path('/uploads/website/event/'. $slideshow->pv);
               unlink($delete_from);

               $uploded_file = $request->pv;
               $extentaion = $uploded_file->getClientOriginalExtension();
               $file_name = $ids . '.' . $extentaion;
               Image::make($uploded_file)->resize(360,260)->save(public_path('/uploads/website/event/' . $file_name));
               Eventmanag::find($ids)->update([
                   'pv' => $file_name,
              ]);
        return redirect(route('manage_event'))->with('success', 'Update Successfully!');
    }



    public function DeleteEvent(Request $request){
           Eventmanag::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }

    public function viewEvent($id){
           $findId = Eventmanag::findOrFail($id);
           return view('backend.website_module.show.event',[
            'findId' => $findId,
           ]);
     }
}
