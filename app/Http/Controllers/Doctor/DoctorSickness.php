<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\medicine;
use App\Models\Sickness;
use App\Models\indication;
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
            'sickness_image.required' => ' image wajib diisi',
            'sickness_image.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
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
            $sicknesses->indication()->attach($request->indication_id);
            $sicknesses->save();
        return redirect()->route('sickness-doctor');
    }
    function edit_sickness($id){
        $sicknesses = Sickness::findOrFail($id);
        $medicines = medicine::all();
        $indications = indication::all();
        $array = [
            'Sickness' => $sicknesses,
            'medicine' => $medicines,
            'indications' => $indications,
        ];
        return view('/pages/doctor-layout/sickness/edit-sickness', $array);
    }
    function update_sickness (Request $request, $id){
        $request->validate([
            'sickness_name' => 'required',
            'sickness_description' => 'required',
            'sickness_solution' => 'required',
            'medicine_id' => 'required',
            'sickness_image' => 'mimes:jpeg,png,jpg,gif'
        ],[
            'sickness_name.required' => 'sickness_name wajib diisi',
            'sickness_description.required' => 'short description wajib diisi',
            'sickness_solution.required' => ' sickness_solution wajib diisi',
            'medicine_id.required' => ' medicine_id wajib diisi',
            'sickness_image.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
        ]);
        $sicknesses = Sickness::find($id);
        if($request->hasFile('sickness_image')){
            $request->validate([
                'image' => 'mimes:jpeg,png,jpg,gif'
            ],[
                'image.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
            ]);
            $image_file = $request->file('sickness_image');
            $image_extension = $image_file->getClientOriginalName();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);

            $data_image = Sickness::where('id', $id)->first();
            File::delete(public_path('img') . '/'. $data_image->sickness_image);
        }
        Sickness::where('id',$id)->update([
            'sickness_name' => $request->input('sickness_name'),
            'sickness_description' => $request->input('sickness_description'),
            'sickness_solution' => $request->input('sickness_solution'),
            'medicine_id' => $request->medicine_id,
            'sickness_image' => $request->sickness_image ? $image_name : $sicknesses->sickness_image,
        ]);
        $sicknesses->indication()->sync($request->indication_id);
        return redirect()->route('sickness-doctor');
    }
    public function delete_sickness($id){
        $data = Sickness::where('id', $id)->first();
        File::delete(public_path('img'). '/' .$data->image);

        Sickness::where('id', $id)->delete();
        return redirect()->route('sickness-doctor');
    }
}
