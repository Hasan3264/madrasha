<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;
use App\Models\aboutcontent;
use App\Models\Brakingnews;
use App\Models\Managealbam;
use App\Models\ManuContent;
use App\Models\Manumodel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebsiteModuleTwoController extends Controller
{
    public function manageContent(){
        $manucont = ManuContent::all();
        return view('backend.website_module.manage_content',[
            'manucont' => $manucont,
        ]);
    }
    public function AboutmanageContent(){
        $manucont = aboutcontent::all();
        return view('backend.website_module.AboutpageContent',[
            'manucont' => $manucont,
        ]);
    }


     public function addContent(){
        $manumodel = Manumodel::all();
        return view('backend.website_module.add_folder.add_content',[
            'manumodel' => $manumodel
        ]);
      }

     public function AboutaddContent(){
        return view('backend.website_module.add_folder.aboutpagecontent');
      }
      public function InputContent(Request $request){
           $request->validate([
              'manu' => ['required'],
              'content' => ['required'],
              'status' => ['required'],
           ]);
           $ids =  ManuContent::insertGetId([
                'manu' => $request->manu,
                'content' => $request->content,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ]);
        return redirect(route('manage_content'))->with('success', 'Inserted Successfully!');
      }

      public function AboutInputContent(Request $request){
           $request->validate([
              'manu' => ['required'],
              'content' => ['required'],
              'status' => ['required'],
           ]);
           $ids =  aboutcontent::insertGetId([
                'manu' => $request->manu,
                'content' => $request->content,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ]);
        return redirect(route('manage.about_content'))->with('success', 'Inserted Successfully!');
      }

      public function EditContent($id){
         $manumodel = Manumodel::all();
          $findId = ManuContent::findOrFail($id);
          return view('backend.website_module.edit.content',[
            'find_id' => $findId,
            'manumodel' => $manumodel
          ]);
      }

      public function AboutEditContent($id){
          $findId = aboutcontent::findOrFail($id);
          return view('backend.website_module.edit.aboutpagecontent',[
            'find_id' => $findId,
          ]);
      }



     public function DeleteContent(Request $request){
        ManuContent::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }

     public function AboutDeleteContent(Request $request){
            aboutcontent::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }


      public function UpdateContent(Request $request){
           $request->validate([
              'manu' => ['required'],
              'content' => ['required'],
              'status' => ['required'],
           ]);
           ManuContent::findOrFail($request->edit_id)->update([
                'manu' => $request->manu,
                'content' => $request->content,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
           ]);
        return redirect(route('manage_content'))->with('success', 'Inserted Successfully!');
      }

      public function AboutUpdateContent(Request $request){
           $request->validate([
              'manu' => ['required'],
              'content' => ['required'],
              'status' => ['required'],
           ]);
           aboutcontent::findOrFail($request->edit_id)->update([
                'manu' => $request->manu,
                'content' => $request->content,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
           ]);
        return redirect(route('manage.about_content'))->with('success', 'Inserted Successfully!');
      }

    public function ViewContent($id){
        $findId = ManuContent::findOrFail($id);
        return view('backend.website_module.show.content',[
              'findId' => $findId,
        ]);
    }


   // content part end
   //braking content part start

   public function breakingNews(){
        $brakings = Brakingnews::all();
       return view('backend.website_module.breaking_news',[
         'brakings' => $brakings,
       ]);
   }
   public function addBreakingNews(){
       return view('backend.website_module.add_folder.add_braking_news');
   }
    public  function Inputbraking(Request $request){
          $request->validate([
              'title' => ['required'],
              'details' => ['required'],
              'status' => ['required'],
           ]);
           Brakingnews::insert([
                'title' => $request->title,
                'details' => $request->details,
                'status' => $request->status,
                'created_at' => Carbon::now(),
           ]);
          return redirect(route('breaking_news'))->with('success', 'Insert Successfully!');
    }




    public function Deletebraking(Request $request){
        Brakingnews::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }
    public function Editbraking($id){
        $findId = Brakingnews::findOrFail($id);
        return view('backend.website_module.edit.add_braking_news',[
            'findId' => $findId,
        ]);
    }
    public function Updatebraking(Request $request){
        $request->validate([
              'title' => ['required'],
              'details' => ['required'],
              'status' => ['required'],
           ]);
           Brakingnews::findOrFail($request->edit_id)->update([
                  'title' => $request->title,
                'details' => $request->details,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
           ]);
            return redirect(route('breaking_news'))->with('success', 'Updated Successfully!');
    }
     public function Viewbraking($id){
          $findId = Brakingnews::findOrFail($id);
          return view('backend.website_module.show.braking_news',[
            'findId' => $findId,
          ]);
     }











   // albem section start


       public function manageAlbum(){
        $albames = Managealbam::all();
           return view('backend.website_module.manage_album',[
            'albames' => $albames,
           ]);
       }


    public function addAlbum(){
        return view('backend.website_module.add_folder.add_album');
    }
    public function InsertAlbam(Request $request){
           $request->validate([
              'title' => ['required'],
              'albamtype' => ['required'],
              'status' => ['required'],
           ]);
           Managealbam::insert([
                 'title' => $request->title,
                 'albamtype' => $request->albamtype,
                 'status' => $request->status,
                 'created_at' =>  Carbon::now(),
           ]);
           return redirect(route('manage_album'))->with('success', 'Insert Successfully!');
    }

   public function EditAlbum($id){
     $findId = Managealbam::findOrFail($id);
      return view('backend.website_module.edit.add_album',[
          'findId' => $findId,
      ]);
   }
   public function UpdateAlbam(Request $request){
      $request->validate([
              'title' => ['required'],
              'albamtype' => ['required'],
              'status' => ['required'],
           ]);
           Managealbam::findOrFail($request->edit_id)->update([
                 'title' => $request->title,
                 'albamtype' => $request->albamtype,
                 'status' => $request->status,
                 'updated_at' =>  Carbon::now(),
           ]);
        return redirect(route('manage_album'))->with('success', 'Updated Successfully!');
   }
   public function DeleteAlbam(Request $request){
        Managealbam::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
   }
   public function showAlbam($id){
        $findId = Managealbam::findOrFail($id);
        return view('backend.website_module.show.album',[
            'findId' => $findId,
        ]);
   }
}

?>
