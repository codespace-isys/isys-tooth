<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\medicine;
use App\Models\Sickness;
use Illuminate\Http\Request;

class DoctorSickness extends Controller
{
    public function __construct()
    {
        $this->middleware('is_doctor');
    }
    
    function index()
    {
        $sicknesses = Sickness::all();
        return view('/pages/doctor-layout/sickness/sickness')->with('sicknesses' ,$sicknesses);
    }
    function create(){
        $medicines = medicine::all();
        return view('/pages/doctor-layout/sickness/create-sickness')->with('medicines', $medicines);
    }
    function store_sickness(Request $request){
        $sicknesses = new Sickness();
        $request->validate([
            'sickness_name' => 'required',
            'sickness_description' => 'required',
            'sickness_solution' => 'required',
            'medicine_id' => 'required',
            'sickness_image' => 'required|mimes:jpeg,png,jpg,gif'
        ],[
            'sickness_name.required' => 'sickness_name wajib diisi',
            'sickness_description.required' => 'short description wajib diisi',
            'sickness_solution.required' => ' sickness_solution wajib diisi',
            'medicine_id.required' => ' medicine_id wajib diisi',
            'image.required' => ' image wajib diisi',
            'image.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
        ]);
            $image_file = $request->file('sickness_image');
            $image_extension = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);
       
            $sicknesses = Sickness::Create([
                'sickness_name' => $request->input('sickness_name'),
                'sickness_description' => $request->input('sickness_description'),
                'sickness_solution' => $request->input('sickness_solution'),
                'medicine_id' => $request->input('medicine_id'),
                'sickness_image' => $image_name,
            ]);
            $sicknesses->save();
        return redirect()->route('sickness-doctor');
    }
}
