<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Controller
{
    function store_change_password (Request $request){
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'old password not match with your current password');
        }
        if ($request->new_password != $request->confirm_password) {
            return back()->with('error', 'new password and confirm password not match');
        }
        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);
        return redirect()->back();
    }
}
