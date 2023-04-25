<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class AuthController extends Controller
{
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
                return redirect()->route('dashboard-admin')->with('login-admin', auth()->user()->name.' Successfully Logged In');
            } 
        } else {
            return redirect()->route('login')->with('error', 'Email Or Password Are Wrong.');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 2) {
                return redirect()->route('dashboard-doctor')->with('login-doctor', auth()->user()->name.' Successfully Logged In');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email Or Password Are Wrong.');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 3) {
                return redirect()->route('dashboard-users')->with('login-user', auth()->user()->name.' Successfully Logged In');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email Or Password Are Wrong.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function signup(){
        return view('signup');
    }
    public function create(Request $request){
        $users = new User();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'min:4',
                'max:20',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            ],
        ]);
        $users = User::Create([
            'name' => $request->name,
            'image' => 'default.png',
            'address' => 'Write your address here...',
            'phone' => '+62',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3,
        ]);
        $users->save();
        return redirect()->route('login');
    }  
}
