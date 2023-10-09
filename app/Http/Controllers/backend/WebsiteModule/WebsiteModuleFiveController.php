<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Inputsocialmedia;
use App\Models\Teachercontent;
use App\Models\Teachercontnet;
use App\Models\usefulllink;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebsiteModuleFiveController extends Controller
{
    public function manageLink(){
        $lisks = usefulllink::all();
        return view('backend.website_module.manage_link',[
            'lisks' => $lisks
        ]);
    }

    public function addLink(){
        return view('backend.website_module.add_folder.add_link');
    }
     public function InputLink(Request $request ){
         $request->validate([
             'title' => ['required'],
             'link' => ['required'],
         ]);
          usefulllink::insert([
            'title' => $request->title,
            'link' => $request->link,
          ]);
          return redirect(route('manage_link'))->with('success', 'Update Successfully!');
     }

     public function DeleteLink(Request $request){
         usefulllink::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }

     public function EditLink($id){
        $findId = usefulllink::findOrFail($id);
        return view('backend.website_module.edit.add_link',[
            'findId' => $findId
        ]);
     }
     public function UpdateLink(Request $request){
          $request->validate([
             'title' => ['required'],
             'link' => ['required'],
         ]);

         usefulllink::findOrFail($request->edit_id)->update([
             'title' => $request->title,
            'link' => $request->link,
         ]);
        return redirect(route('manage_link'))->with('success', 'Update Successfully!');
     }
    public function viewLink($ids){
       $findId = usefulllink::findOrFail($ids);
       return view('backend.website_module.show.uselink',[
        'findId' => $findId
       ]);
    }



    // add section

    public function addSocialMedia(){

        return view('backend.website_module.add_folder.add_social_media');
    }
    public function manageSocialMedia(){
         $sosias= Inputsocialmedia::all();
        return view('backend.website_module.manage_social_media',[
            'sosias' => $sosias,
        ]);
    }
    public function InputSocialMedia(Request $request){
       $request->validate([
            'title' => ['required'],
            'url' => ['required'],
       ]);
        Inputsocialmedia::insert([
          'title' => $request->title,
          'url' => $request->url,
          'created_at' => Carbon::now(),
        ]);
       return redirect(route('manage_social_media'))->with('success', 'Insert Successfully!');
    }
    public function EditSocialMedia($id) {
        $findId = Inputsocialmedia::findOrFail($id);
         return view('backend.website_module.edit.socialmedia',[
            'findId' => $findId,
         ]);
    }
    public function UpdateSocialMedia(Request $request){
       $request->validate([
            'title' => ['required'],
            'url' => ['required'],
       ]);
       Inputsocialmedia::findOrFail($request->edit_id)->update([
            'title' => $request->title,
          'url' => $request->url,
          'update_at' => Carbon::now(),
       ]);
        return redirect(route('manage_social_media'))->with('success', 'Update Successfully!');
    }
    public function DeleteSocialMedia(Request $request){
         Inputsocialmedia::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }
     public function ViewSocialMedia($id){
        $findId = Inputsocialmedia::findOrFail($id);
        return view('backend.website_module.show.socialmedia',[
            'findId' => $findId,
        ]);
     }




     //facitity part starts here

     public function index(){
        $facility = Facility::all();
        return view('backend.website_module.facility',[
          'facility' => $facility
        ]);
     }

     public function AddFacility(){
        return view('backend.website_module.add_folder.facility');
     }
     public function InputFacility(Request $request){
           $request->validate([
           'title' => ['required'],
           'details' => ['required', 'string','max:100'],
           'status' => ['required'],
        ]);
        Facility::insert([
              'title' => $request->title,
              'details' => $request->details,
              'status' => $request->status,
              'created_at' => Carbon::now(),

        ]);
        return redirect(route('facility'))->with('success', 'Update Successfully!');
     }
     public function deleteFacility(Request $request){
       Facility::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }
     public function EditFacility($id){
        $findId = Facility::findOrFail($id);
        return view('backend.website_module.edit.facility',[
            'findId' => $findId,
        ]);
     }
     public function UpdateFacility(Request $request){
        $request->validate([
           'title' => ['required'],
           'details' => ['required', 'string','max:100'],
           'status' => ['required'],
        ]);

        Facility::findOrFail($request->edit_id)->update([
           'title' => $request->title,
              'details' => $request->details,
              'status' => $request->status,
              'updated_at' => Carbon::now(),
        ]);
        return redirect(route('facility'))->with('success', 'Updated Successfully!');
     }

     //teachers content part end

     public function TeachContIndex(){
        $content = Teachercontent::all();
        return view('backend.website_module.teacherContent',[
            'content' => $content
        ]);
     }
     public function TeachContadd(){
        return view('backend.website_module.add_folder.techers_content');
     }
     public function TeachContinput(Request $request){
           $request->validate([
           'pera_1' => ['required','string','max:250'],
           'pera_2' => ['required', 'string','max:250'],
           'status' => ['required'],
        ]);
        Teachercontent::insert([
          'status' => $request->status,
          'pera_1' => $request->pera_1,
          'pera_2' => $request->pera_2,
          'created_at' => Carbon::now(),
        ]);
         return redirect(route('TeachContIndex'))->with('success', 'Updated Successfully!');
     }
     public function TeachContEdit($id){
         $findId = Teachercontent::findOrFail($id);
         return view('backend.website_module.edit.techers_content',[
           'findId' => $findId
         ]);
     }
     public function TeachContUpdate(Request $request){
        $request->validate([
           'pera_1' => ['required','string','max:250'],
           'pera_2' => ['required', 'string','max:250'],
           'status' => ['required'],
        ]);
        Teachercontent::findOrFail($request->edit_id)->update([
          'status' => $request->status,
          'pera_1' => $request->pera_1,
          'pera_2' => $request->pera_2,
          'updated_at' => Carbon::now(),
        ]);
         return redirect(route('TeachContIndex'))->with('success', 'Updated Successfully!');
     }
      public function deleteTeachercontent(Request $request){
       Teachercontent::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }
}

