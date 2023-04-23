<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\indication;
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
        $sicknesses = Sickness::all();
        $indications = indication::all();
        $array = [
            'sicknesses' => $sicknesses,
            'indications' => $indications,
        ];
        return view('/pages/doctor-layout/regulation/regulation', $array);
    }
    function edit_regulation($id){
        $sicknesses = Sickness::findOrFail($id);
        $indications = indication::all();
        $array = [
            'Sickness' => $sicknesses,
            'indications' => $indications,
        ];
        return view('/pages/doctor-layout/regulation/edit-regulation', $array);
    }
    function update_regulation(Request $request, $id){
        $request->validate([
            'indication_id' => 'required',
            'sickness_name' => 'required',
        ]);
        $sicknesses = Sickness::find($id);
        Sickness::where('id',$id)->update([
            'sickness_name' => $request->input('sickness_name'),
        ]);
        $sicknesses->indication()->sync($request->indication_id);
        return redirect()->route('regulation-doctor');
    }
}
