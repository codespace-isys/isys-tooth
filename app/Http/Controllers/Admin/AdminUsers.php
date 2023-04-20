<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Role;

class AdminUsers extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    function index()
    {
        $users = User::all();
        $roles = Role::all();
        $array = [
            'users' => $users,
            'roles' => $roles,
        ];
        return view('/pages/admin-layout/users/users', $array);
    }
    function store_users(Request $request){
        $users = new User();
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ],[
            'first_name.required' => 'first_name wajib diisi',
            'last_name.required' => 'last_name wajib diisi',
            'phone.required' => 'phone wajib diisi',
            'image.required' => ' image wajib diisi',
            'image.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
        ]);

        $image_file = $request->file('image');
        $image_extension = $image_file->extension();
        $image_name = date('ymdhis') . "." . $image_extension;
        $image_file->move(public_path('img'), $image_name);

        $users = User::Create([
            'name' => $request->first_name.' '.$request->last_name,
            'image' => $image_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);
        $users->save();
        return redirect()->route('users-admin');
    }
    function update_users(Request $request,$id){
        // $request->validate([
        //     'name' => 'required',
        // ],[
        //     'name.required' => 'name wajib diisi',
        // ]);
        //$id = $request->user_id_edit;
        $users = User::find($id);
        if($request->hasFile('image_edit')){
            // $request->validate([
            //     'image_edit' => 'mimes:jpeg,png,jpg,gif'
            // ],[
            //     'image_edit.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
            // ]);
            $image_file = $request->file('image_edit');
            $image_extension = $image_file->getClientOriginalName();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);

            $data_image = User::where('id', $id)->first();
            File::delete(public_path('img') . '/'. $data_image->image_edit);
        }

        User::where('id',$id)->update([
            'name' => $request->first_name_edit.' '.$request->last_name_edit,
            'email' => $request->input('email_edit'),
            'address' => $request->input('address_edit'),
            'phone' => $request->input('phone_edit'),
            'role_id' => $request->input('role_edit'),
            'image' => $request->image_edit ? $image_name : $users->image,
        ]);
        return redirect()->route('users-admin');
    }
    function delete_users($id){
        User::where('id',$id)->delete();
        return redirect()->route('users-admin');
    }
}
