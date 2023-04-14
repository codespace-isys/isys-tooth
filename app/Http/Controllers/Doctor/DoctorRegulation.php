<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\indication;
use App\Models\Regulation;
use App\Models\Sickness;
use Illuminate\Http\Request;

class DoctorRegulation extends Controller
{
    public function __construct()
    {
        $this->middleware('is_doctor');
    }
    
    function index()
    {
        $regulations = Regulation::all();
        $sicknesses = Sickness::all();
        $indications = indication::all();
        $array = [
            'regulations' => $regulations,
            'sicknesses' => $sicknesses,
            'indications' => $indications,
        ];
        return view('/pages/doctor-layout/regulation/regulation', $array);
    }
    public function get_indication(Request $request){
        $indication_id = [];
        if($search = $request->indication){
            $indication_id = indication::where('indication','LIKE',"%$search%")->get();
        }
        return response()->json($indication_id);
    }
    function store_regulation(Request $request){
        $regulations = new Regulation();
        $request->validate([
            'sickness_id' => 'required',
            'indication_id' => 'required',
        ],[
            'sickness_id.required' => 'nama Regulation wajib diisi',
            'indication_id.required' => 'informasi Regulation wajib diisi',
        ]);
        $regulations = Regulation::Create($request->indication_id);
        $regulations->save();
        return redirect()->route('regulation-doctor');
    }
}
