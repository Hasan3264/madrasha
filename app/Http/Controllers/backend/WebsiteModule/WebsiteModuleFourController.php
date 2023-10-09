<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Models\Boardresult;
use App\Models\Brakingnews;
use App\Models\Careermanage;
use App\Models\Noticemanage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use PHPUnit\Framework\TestStatus\Notice;

class WebsiteModuleFourController extends Controller
{
    public function manageNotice(){
         $noties = Noticemanage::all();
        return view('backend.website_module.manage_notice',[
            'noties' => $noties,
        ]);
    }
    public function addNotice(){

        return view('backend.website_module.add_folder.add_notice');
    }
    public function InsertNotice(Request $request){
        $request->validate([
              'title' => ['required'],
              'notice' => ['required'],
              'pdf' => ['required','mimes:jpeg,jpg,png']
        ]);
      $ids =  Noticemanage::insertGetId([
          'title' => $request->title,
          'notice' => $request->notice,
          'pdf' => 'ok',
        ]);

        $uploded_file = $request->pdf;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        $uploded_file->move(public_path('/uploads/website/noticepdf/'), $file_name);

        Noticemanage::find($ids)->update([
            'pdf' => $file_name,
        ]);
        return redirect(route('manage_notice'))->with('success', 'Inserted Successfully!');
    }
    public function EditNotice($id){
       $findId = Noticemanage::findOrFail($id);
       return view('backend.website_module.edit.add_notice',[
         'findId' => $findId
       ]);
    }
    public function UpdateNotice(Request $request){
            $request->validate([
             'title' => ['required'],
              'notice' => ['required'],
              'pdf' => ['required','mimes:jpez,jpg,png'],
        ]);
        Noticemanage::findOrFail($request->edit_id)->update([
            'title' => $request->title,
          'notice' => $request->notice,
        ]);
        $ids = $request->edit_id;
           $massaes= Noticemanage::find($ids);
           $delete_from=public_path('/uploads/website/noticepdf/'. $massaes->pdf);
           unlink($delete_from);

        $uploded_file = $request->pdf;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        $uploded_file->move(public_path('/uploads/website/noticepdf/'), $file_name);

         Noticemanage::find($ids)->update([
            'pdf' => $file_name,
        ]);
        return redirect(route('manage_notice'))->with('success', 'Inserted Successfully!');
    }



     public function DeleteNotice(Request $request){
        Noticemanage::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }


    public function ViewNotice($id ){
          $findId = Noticemanage::findOrFail($id);
          return view('backend.website_module.show.notice',[
            'findId' => $findId,
          ]);
    }
    public function manageCareer(){
        $career = Careermanage::all();
        return view('backend.website_module.manage_career',[
            'career' => $career,
        ]);
    }

    public function addCareer(){
        return view('backend.website_module.add_folder.add_Career');
    }

    public function InputCareer(Request $request){
          $request->validate([
            'title' => ['required'],
            'dadline' => ['required'],
            'details' => ['required'],
            'status' => ['required'],
          ]);
          $ids = Careermanage::insertGetId([
               'title' => $request->title,
               'dadline' => $request->dadline,
               'details' => $request->details,
               'status' => $request->status,
          ]);
        return redirect(route('manage_career'))->with('success', 'Inserted Successfully!');
    }

    public function EditCareer($id ){
         $findId = Careermanage::findOrFail($id);
         return view('backend.website_module.edit.add_career',[
            'findId' => $findId,
         ]);
    }

    public function UpdateCareer(Request $request){
           $request->validate([
            'title' => ['required'],
            'dadline' => ['required'],
            'details' => ['required'],
            'status' => ['required'],
          ]);

          Careermanage::findOrFail($request->edit_id)->update([
               'title' => $request->title,
               'dadline' => $request->dadline,
               'details' => $request->details,
               'status' => $request->status,
          ]);
         return redirect(route('manage_career'))->with('success', 'Updated Successfully!');
    }

   public function ViewCareer($id){
      $findId= Careermanage::findOrFail($id);
      return view('backend.website_module.show.career',[
        'findId' => $findId,
      ]);
   }

    public function DeleteCareer(Request $request){
        Careermanage::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }


    // result part start




    public function boardResult(){
        $results = Boardresult::all();
        return view('backend.website_module.board_result',[
            'results'=> $results
        ]);
    }

    public function addBoardResult(){
        return view('backend.website_module.add_folder.add_board_result');
    }
    public function InputResult(Request $request){
          $request->validate([
             'exam_type' => ['required'],
             'year' => ['required'],
             't_student' => ['required'],
             'pass_student' => ['required'],
             'passes' => ['required'],
             'exam_name' => ['required'],
             't_plass' => ['required'],
             'details' => ['required'],
             'status' => ['required'],
          ]);
          Boardresult::insert([
                'exam_type' => $request->exam_type,
                'year' => $request->year,
                't_student' => $request->t_student,
                'pass_student'=>$request->pass_student,
                'passes' => $request->passes,
                'exam_name' => $request->exam_name,
                't_plass' => $request->t_plass,
                'details' => $request->details,
                'status' => $request->status
          ]);
          return redirect(route('board_result'))->with('success', 'Inserted Successfully!');
    }
    public function EditResult($id ){
        $findId = Boardresult::findOrFail($id);
         return view('backend.website_module.edit.add_board_result',[
            'findId' => $findId,
         ]);
    }
    public function UpdateResult(Request $request){
          $request->validate([
             'exam_type' => ['required'],
             'year' => ['required'],
             't_student' => ['required'],
             'pass_student' => ['required'],
             'passes' => ['required'],
             'exam_name' => ['required'],
             't_plass' => ['required'],
             'details' => ['required'],
             'status' => ['required'],
          ]);
        Boardresult::findOrFail($request->edit_id)->update([
              'exam_type' => $request->exam_type,
                'year' => $request->year,
                't_student' => $request->t_student,
                'pass_student'=>$request->pass_student,
                'passes' => $request->passes,
                'exam_name' => $request->exam_name,
                't_plass' => $request->t_plass,
                'details' => $request->details,
                'status' => $request->status
        ]);
      return redirect(route('board_result'))->with('success', 'Update Successfully!');
    }
    public function ViewResult($id){
         $findId = Boardresult::findOrFail($id);
         return view('backend.website_module.show.result',[
            'findId' => $findId,
         ]);
    }
    public function DeleteBoard(Request $request){
        Boardresult::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
     }

}
