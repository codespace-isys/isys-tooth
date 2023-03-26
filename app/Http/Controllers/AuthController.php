<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // public function login(){
    //     $users = new User();
    //     $users = $users->get();
    //     return view('login', ['users' => $users]);
    // }
    // public function authenticating(Request $request){
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('dashboard');
    //     }
    //    // Session::flash('name', $request->name);
    //     Session::flash('status', 'failed');
    //     Session::flash('message', 'login wrong!');

    //     return redirect('/login');
    //    // dd($request->all());
    // }

    public function index()
    {
        return view('login');
    }

    public function submit(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 1) {
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 2) {
                return redirect()->route('doctor.dashboard.index');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 3) {
                return redirect()->route('user.dashboard.index');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
