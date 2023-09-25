<?php

namespace App\Http\Controllers\backend\finance_module;

use App\Http\Controllers\Controller;
use App\Models\Financemodule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccountHeadController extends Controller
{
    public function AccountHead(){
        $accounts = Financemodule::all();
        return view('backend.finance_module.account_head',[
            'accounts' => $accounts,
        ]);
    }//end method

    public function AddAccountHead(){
        return view('backend.finance_module.add_account_head');
    }//end method

    public function StoreAccountHead(Request $request){
      $request->validate([
          'actype' => ['required'],
          'acCat' => ['required'],
          'acparents' => ['required'],
          'accode' => ['required'],
          'achead' => ['required'],
          'yarmont' => ['required'],
          'haschild' => ['required'],
          'status' => ['required'],
      ]);
      Financemodule::insert([
         'actype' => $request->actype,
         'acCat' => $request->acCat,
         'acparents' => $request->acparents,
         'accode' => $request->accode,
         'achead' => $request->achead,
         'yarmont' => $request->yarmont,
         'haschild' => $request->haschild,
         'status' => $request->status,
         'created_at' => Carbon::now(),
      ]);
      return redirect(route('account_head'))->with('success', 'Added Successfully');
    }//end method

    public function ViewAccountHead($id){
        $findId = Financemodule::findOrFail($id);
        return view('backend.finance_module.account_head_view',[
            'findId' => $findId,
        ]);
    }//end method

    public function EditAccountHead($id){
         $findId = Financemodule::findOrFail($id);
        return view('backend.finance_module.account_head_edit',[
            'findId' => $findId,
        ]);
    }//end method

    public function UpdateAccountHead(Request $request){
       $request->validate([
          'actype' => ['required'],
          'acCat' => ['required'],
          'acparents' => ['required'],
          'accode' => ['required'],
          'achead' => ['required'],
          'yarmont' => ['required'],
          'haschild' => ['required'],
          'status' => ['required'],
      ]);

      Financemodule::findOrFail($request->edit_id)->update([
         'actype' => $request->actype,
         'acCat' => $request->acCat,
         'acparents' => $request->acparents,
         'accode' => $request->accode,
         'achead' => $request->achead,
         'yarmont' => $request->yarmont,
         'haschild' => $request->haschild,
         'status' => $request->status,
         'updated_at' => Carbon::now(),
      ]);
       return redirect(route('account_head'))->with('success', 'Added Successfully');
    }//end method

    public function DeleteAccountHead(Request $request){
        Financemodule::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);

    }//end method
}
