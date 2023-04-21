<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\indication;
use App\Models\Sickness;
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
        $array = [
            'indications' => $indications,
            'sicknesses' => $sicknesses,
        ];
        return view('/pages/users-layout/consultation/consultation', $array);
    }
    function cek_diagnosis (Request $request){
        $indications = indication::all();
        $sicknesses = Sickness::all();
        // foreach ($indications as $indication1) {
        //     foreach ($sicknesses as $sickness) {
        //         //foreach ($sickness->indication as $value) {
        //             if ($sickness->indication == $request->indication) {
        //                 dd('berhasil');
        //             }
        //         //}
        //     }
        // }
        foreach ($sicknesses as $sickness) {
            dd($sickness->indication);
            if ($sickness->indication == $request->indication) {
            }
        }
    }
}
