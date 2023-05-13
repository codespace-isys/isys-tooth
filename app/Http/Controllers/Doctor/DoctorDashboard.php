<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\indication;
use App\Models\medicine;
use App\Models\Sickness;
use Illuminate\Http\Request;

class DoctorDashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('is_doctor');
    }
    
    function dashboard()
    {
        $sicknesses = Sickness::all();
        $countMedicines = medicine::count();
        $countIndications = indication::count();
        $countSicknesses = Sickness::count();
        $array = [
            'sicknesses' => $sicknesses,
            'countMedicines' => $countMedicines,
            'countIndications' => $countIndications,
            'countSicknesses' => $countSicknesses,
        ];
        return view('/pages/doctor-layout/dashboard', $array);
    }
}
