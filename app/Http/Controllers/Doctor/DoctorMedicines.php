<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medicine;

class DoctorMedicines extends Controller
{
    public function __construct()
    {
        $this->middleware('is_doctor');
    }
    
    function index()
    {
        $medicines = medicine::all();
        return view('/pages/doctor-layout/medicine/medicine')->with('medicines', $medicines);
    }
    function store_medicine(Request $request){
        $medicines = new medicine();
        $request->validate([
            'medicine_name' => 'required',
            'medicine_information' => 'required',
        ],[
            'medicine_name.required' => 'nama medicine wajib diisi',
            'medicine_information.required' => 'informasi medicine wajib diisi',
        ]);
        $medicines = medicine::Create([
            'medicine_name' => $request->medicine_name,
            'medicine_information' => $request->medicine_information,
        ]);
        $medicines->save();
        return redirect()->route('medicine-doctor');
    }
    function update_medicine(Request $request)
    {
        //$medicines = medicine::find($id);
        $request->validate([
            'medicine_name' => 'required',
            'medicine_information' => 'required',
        ],[
            'medicine_name.required' => 'nama medicine wajib diisi',
            'medicine_information.required' => 'informasi medicine wajib diisi',
        ]);
        $id = $request->id_medicine;
        medicine::where('id',$id)->update([
            'medicine_name' => $request->input('medicine_name'),
            'medicine_information' => $request->input('medicine_information'),
        ]);
        return redirect()->route('medicine-doctor');
    }
    public function delete_medicine($id){
        medicine::where('id', $id)->delete();
        return redirect()->route('medicine-doctor');
    }
}
