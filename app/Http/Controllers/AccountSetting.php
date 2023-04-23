<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

class AccountSetting extends Controller
{
    function store_account_setting(Request $request, $id){
        $users = User::find($id);
        $request->validate([
            'first_name_edit' => 'required',
            'last_name_edit' => 'required',
            'phone_edit' => 'required',
            'image_edit' => 'image|mimes:jpg,png,jpeg|max:10240',
            'address_edit' => 'required',
            'email_edit' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
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
            'email' => $request->input('email_edit'),
            'address' => $request->input('address_edit'),
            'phone' => $request->input('phone_edit'),
            'image' => $request->image_edit ? $image_name : $users->image,
        ]);
        return redirect()->back();
    }
}
