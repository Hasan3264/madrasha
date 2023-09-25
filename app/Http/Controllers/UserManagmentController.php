<?php

namespace App\Http\Controllers;

use App\Models\branchdetails;
use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\ImageManagerStatic as Image;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\user_type;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
class UserManagmentController extends Controller
{
    public function studentList(){
        $studentlists = user_type::paginate(10);
        return view('backend.usermanagement.userList',[
            'studentlists' => $studentlists,

        ]);
    }


    public function Studentsms(){
        return view('backend.usermanagement.userSmsStudent');
    }



    public function EmployeSms(){
        return view('backend.usermanagement.userSmsEmploye');
    }


    public function add(){
        $branchs = branchdetails::all();
        $roles = Role::all();
      return view('backend.usermanagement.addUser',[
        'branchs' => $branchs,
        'roles' => $roles,
      ]);
    }



    protected $rules = [
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
        'password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/', 'not_in:password,123456,qwerty'],
    ];


    public function input(Request $request){
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return response()->json(['errors' => "error Found."]);
        }
        $userId= User::insertGetId([
            'name'=> $request->username,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
        ]);
        user_type::insert([
                'user_id' => $userId,
                'branch_id' =>$request->branch,
        ]);

        $user = User::find($userId);
         $user->assignRole($request->role_id);
       return response()->json(['success' => "Added Successfully."]);
    }
    public function ProfileInput(Request $request){
      $request->validate([
        'profile' => ['required'],
      ]);


      if (user_type::where('user_id', $request->auth_id)->exists()) {
            // Check if a user type with the specified user_id exists
            // Update the 'user_img' field in the database
            user_type::where('user_id', $request->auth_id)->update([
                'user_img' => $request->profile,
            ]);

            // Process the uploaded image
            $uploaded_file = $request->profile;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = $request->auth_id . '.' . $extension;
            Image::make($uploaded_file)->save(public_path('/uploads/backend/userimg/' . $file_name));

            // Update the 'user_img' field in the database with the image file name
            user_type::where('user_id', $request->auth_id)->update([
                'user_img' => $file_name,
            ]);

          return back()->with('success', 'Added Successfully!');
}

      else{
         $ids = user_type::insertGetId([
            'user_id' => $request->auth_id,
            'user_img' => 'oo',
         ]);

        $uploded_file = $request->profile;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $ids . '.' . $extentaion;
        Image::make($uploded_file)->save(public_path('/uploads/backend/userimg/' . $file_name));
        user_type::find($ids)->update([
            'user_img' => $file_name,
        ]);
         return back()->with('success', 'Added Successfully!');

      }
    }



    public function show($id){
         $findId = user_type::findOrFail($id);
         return view('backend.usermanagement.show',[
             'findId' => $findId,
         ]);
    }





    public function edit($id){
         $findId = user_type::findOrFail($id);
         $branchs = branchdetails::all();
         return view('backend.usermanagement.edit',[
             'findId' => $findId,
             'branchs' => $branchs,
         ]);
    }




    public function editInput(Request $request){
         $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return response()->json(['errors' => "error Found."]);
        }
         User::find($request->user_id)->update([
            'name'=> $request->username,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
         ]);
         user_type::find($request->bruchType_id)->update([
            'user_typ' =>$request->subject,
            'branch_id' =>$request->branch,
        ]);
        return response()->json(['success' => "Added Successfully."]);
    }






    public function userDelete($id){
         User::findOrFail($id)->delete();
         user_type::where('user_id', $id)->delete();
        return back()->with('success', 'Deletion Successfull!');
    }





    public function Index(){
        $roles = Role::all();
        $parmission = Permission::all();
        $users = User::all();
        return view('backend.rolemanagement.index',[
            'parmissions'=> $parmission,
            'roles'=>$roles,
            'users'=>$users,
        ]);
    }




    public function Permittion_Input(Request $request){
        $request->validate([
            'name' => 'required|unique:permissions|max:255',
        ]);
      $permission = Permission::create(['name' => $request->name]);
     return back()->with('success', 'Addition Successfull!');
    }





    public function Role_Input(Request $request){
        $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);
         $role = Role::create(['name' => $request->name]);
        $role->givePermissionTo($request->parmission);
        return back()->with('success', 'Addition Successfull!');

    }


    function Role_Assign(Request $requset){
    $user = User::find($requset->user_id);
    $user->assignRole($requset->role_id);
     return back()->with('success', 'Addition Successfull!');
   }

   public  function Edit_permittion($id){
    $roles = Role::all();
        $parmission = Permission::all();
        $findIdPermittton = User::findOrFail($id);
        return view('backend.rolemanagement.edit',[
            'user_info' => $findIdPermittton,
            'parmissions'=> $parmission,
            'roles'=>$roles,
        ]);
   }
   public  function permittionUpdate(Request $request){
       $user = User::find($request->user_id);
     $user->syncRoles($request->roles);
     return back()->with('success', 'Updation Successfull!');
   }
}
