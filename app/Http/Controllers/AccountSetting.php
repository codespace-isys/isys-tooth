<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;

class AccountSetting extends Controller
{
    function store_account_setting(Request $request, $id){
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
            'image' => $request->image_edit ? $image_name : $users->image,
        ]);
        return redirect()->back();
    }
}
