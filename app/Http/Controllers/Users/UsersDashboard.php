<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class UsersDashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    function dashboard()
    { 
        return view('/pages/users-layout/dashboard');
    }
}
