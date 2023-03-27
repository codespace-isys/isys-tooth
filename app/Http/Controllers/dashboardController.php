<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    function dashboard()
    {
        return view('dashboard');
    }
}
