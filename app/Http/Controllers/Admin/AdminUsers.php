<?php

namespace App\Http\Controllers\Admin;

use Session;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

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
            'image' => 'required|image|mimes:jpg,png,jpeg|max:10240',
            'address' => 'required',
            'email_store' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'min:4',
                'max:20',
            ],
            'role' => 'required',
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
            'email' => $request->email_store,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);
        $users->save();
        return redirect()->route('users-admin')->with('success-store-users', 'Data '.$request->first_name.' '.$request->last_name.' Saved Successfully');
    }
    function update_users(Request $request,$id){
        $users = User::find($id);
        $request->validate([
            'first_name_edit' => 'required',
            'last_name_edit' => 'required',
            'phone_edit' => 'required',
            'image_edit' => 'image|mimes:jpg,png,jpeg|max:10240',
            'address_edit' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
            'role_edit' => 'required',
        ]);
        if($request->hasFile('image_edit')){
            $image_file = $request->file('image_edit');
            $image_extension = $image_file->getClientOriginalName();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);

            $data_image = User::where('id', $id)->first();
            File::delete(public_path('img') . '/'. $data_image->image_edit);
        }

        User::where('id',$id)->update([
            'name' => $request->first_name_edit.' '.$request->last_name_edit,
            'email' => $request->email,
            'address' => $request->input('address_edit'),
            'phone' => $request->input('phone_edit'),
            'role_id' => $request->input('role_edit'),
            'image' => $request->image_edit ? $image_name : $users->image,
        ]);
        return redirect()->route('users-admin')->with('success-update-users', 'Data '.$request->first_name_edit.' '.$request->last_name_edit. ' Updated Successfully');
    }
    function delete_users($id){
        User::where('id',$id)->delete();
        return redirect()->route('users-admin');
    }
    function report_users(){
        $users = User::all();
        $array = [
            'users' => $users,
        ];
        $pdf = Pdf::loadView('pages.admin-layout.users.report-users', $array);
        return $pdf->download('report-users-' .Carbon::now()->timestamp.'.pdf');
    }
}
