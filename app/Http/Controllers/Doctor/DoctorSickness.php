<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\medicine;
use App\Models\Sickness;
use App\Models\indication;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
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
        $indications = indication::all();
        $array = [
            'medicines' => $medicines,
            'indications' => $indications,
        ];
        return view('/pages/doctor-layout/sickness/create-sickness', $array);
    }
    function store_sickness(Request $request){
        $sicknesses = new Sickness();
        $request->validate([
            'sickness_name' => 'required|unique:sicknesses,sickness_name',
            'sickness_description' => 'required',
            'sickness_solution' => 'required',
            'medicine_id' => 'required',
            'sickness_image' => 'required|image|mimes:jpg,png,jpeg|max:10240',
        ]);
            $image_file = $request->file('sickness_image');
            $image_extension = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);
       
            $sicknesses = Sickness::Create([
                'sickness_name' => $request->input('sickness_name'),
                'sickness_description' => $request->input('sickness_description'),
                'sickness_solution' => $request->input('sickness_solution'),
                'medicine_id' => $request->medicine_id,
                'sickness_image' => $image_name,
            ]);
            $sicknesses->save();
        return redirect()->route('sickness-doctor')->with('success-store-sickness', 'Data '.$request->sickness_name.' Saved Successfully');
    }
    function edit_sickness($id){
        $sicknesses = Sickness::findOrFail($id);
        $medicines = medicine::all();
        $indications = indication::all();
        $array = [
            'Sickness' => $sicknesses,
            'medicines' => $medicines,
            'indications' => $indications,
        ];
        return view('/pages/doctor-layout/sickness/edit-sickness', $array);
    }
    function update_sickness (Request $request, $id){
        $request->validate([
            'sickness_name' =>  [
                'required',
                Rule::unique('sicknesses')->ignore($id),
            ],
            'sickness_description' => 'required',
            'sickness_solution' => 'required',
            'medicine_id' => 'required',
            'sickness_image' => 'image|mimes:jpg,png,jpeg|max:10240',
        ]);
        $sicknesses = Sickness::find($id);
        if($request->hasFile('sickness_image')){
            $image_file = $request->file('sickness_image');
            $image_extension = $image_file->getClientOriginalName();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);

            $data_image = Sickness::where('id', $id)->first();
            File::delete(public_path('img') . '/'. $data_image->sickness_image);
        }
        Sickness::where('id',$id)->update([
            'sickness_name' => $request->sickness_name,
            'sickness_description' => $request->sickness_description,
            'sickness_solution' => $request->sickness_solution,
            'medicine_id' => $request->medicine_id,
            'sickness_image' => $request->sickness_image ? $image_name : $sicknesses->sickness_image,
        ]);
        return redirect()->route('sickness-doctor')->with('success-update-sickness', 'Data '.$request->sickness_name.' Update Successfully');
    }
    public function delete_sickness($id){
        $data = Sickness::where('id', $id)->first();
        File::delete(public_path('img'). '/' .$data->image);

        Sickness::where('id', $id)->delete();
        return redirect()->route('sickness-doctor');
    }
}
