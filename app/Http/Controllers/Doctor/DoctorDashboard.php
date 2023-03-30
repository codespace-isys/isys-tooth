<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
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
