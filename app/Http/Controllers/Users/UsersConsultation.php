<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\indication;
use App\Models\Sickness;
use App\Models\indication_sickness;
use Termwind\Components\Dd;

class UsersConsultation extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    function index()
    { 
        $indications = indication::all();
        $sicknesses = Sickness::all();
        $selectedIndication = [1, 3];
        $indication = indication_sickness::whereIn('indication_id', $selectedIndication)->get();
        $array = [
            'indications' => $indications,
            'sicknesses' => $sicknesses,
            'indication' => $indication,
        ];
        return view('/pages/users-layout/consultation/consultation', $array);
    }
    function cek_diagnosis (Request $request){
        $request->all();
    }
    function result_diagnosis (Request $request){

    }
}
