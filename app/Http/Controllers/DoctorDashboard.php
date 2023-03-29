<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('is_doctor');
    }
    function dashboard()
    {
        return view('/pages/doctor-layout/dashboard');
    }
}
