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
                return redirect()->route('dashboard-admin');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 2) {
                return redirect()->route('dashboard-doctor');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 3) {
                return redirect()->route('dashboard-users');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:2',
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silakan gunakan email lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter',
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
