<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Controller
{
    function store_change_password (Request $request){
        $request->validate([
            'old_password' => [
                'required',
                'min:4',
                'max:20',
            ],
            'new_password' => [
                'required',
                'min:4',
                'max:20',

            ],
            'confirm_password' => [
                'required',
                'min:4',
                'max:20',
                'same:new_password',
            ],
        ]);
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'old password not match with your current password');
        }
        if ($request->new_password != $request->confirm_password) {
            return back()->with('error', 'new password and confirm password not match');
        }
        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);
        return redirect()->back()->with('success-update-change-password', 'Data '.auth()->user()->name.' Updated Successfully');
    }
}
