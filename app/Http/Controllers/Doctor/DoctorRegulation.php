<?php

namespace App\Http\Controllers\Doctor;

use Carbon\Carbon;
use App\Models\Sickness;
use App\Models\indication;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

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
            'sickness_name' => $request->sickness_name,
        ]);
        $sicknesses->indication()->sync($request->indication_id); 
        return redirect()->route('regulation-doctor')->with('success-store-regulation', 'Data '.$request->sickness_name.' Saved Successfully');
    }
    function report_regulation(){
        $sicknesses = Sickness::all();
        $array = [
            'sicknesses' => $sicknesses,
        ];
        $pdf = Pdf::loadView('pages.doctor-layout.regulation.report-regulation', $array);
        return $pdf->download('report-regulations-' .Carbon::now()->timestamp.'.pdf');
    }
}
