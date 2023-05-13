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
            'first_name_setting' => 'required',
            'last_name_setting' => 'required',
            'phone_setting' => 'required',
            'image_setting' => 'image|mimes:jpg,png,jpeg|max:10240',
            'address_setting' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
        ]);
        if($request->hasFile('image_setting')){
            $image_file = $request->file('image_setting');
            $image_extension = $image_file->getClientOriginalName();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);

            $data_image = User::where('id', $id)->first();
            File::delete(public_path('img') . '/'. $data_image->image_setting);
        }

        User::where('id',$id)->update([
            'name' => $request->first_name_setting.' '.$request->last_name_setting,
            'email' => $request->input('email'),
            'address' => $request->input('address_setting'),
            'phone' => $request->input('phone_setting'),
            'image' => $request->image_setting ? $image_name : $users->image,
        ]);
        return redirect()->back()->with('success-update-account-setting', 'data '.$request->first_name_setting.' '.$request->last_name_setting.' Update Successfully');
    }
}
