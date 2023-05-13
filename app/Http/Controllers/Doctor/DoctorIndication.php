<?php

namespace App\Http\Controllers\Doctor;

use Carbon\Carbon;
use App\Helpers\Helper;
use App\Models\indication;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class DoctorIndication extends Controller
{
    public function __construct()
    {
        $this->middleware('is_doctor');
    }
    function index()
    {        
        $indications = indication::all();
        $code_indication = Helper::IDGenerator(new indication, 'code_indication', '4', 'IDC');
        $array = [
            'indications' => $indications,
            'format' => $code_indication,
        ];
        return view('/pages/doctor-layout/indication/indication', $array);
    }
    function store_indication(Request $request){
        $indications = new indication();
        $request->validate([
            'code_indication_store' => 'required|unique:indications,code_indication',
            'indication_store' => 'required|unique:indications,indication',
        ]);
        $indications = indication::Create([
            'code_indication' => $request->code_indication_store,
            'indication' => $request->indication_store,
        ]);
        $indications->save();
        return redirect()->route('indication-doctor')->with('success-store-indication', 'Data Indication Saved Successfully');
    }
    public function update_indication(Request $request){
        $id = $request->id_indication;
        $request->validate([
            'code_indication' =>  [
                'required',
                Rule::unique('indications')->ignore($id),
            ],
            'indication' => [
                'required',
                Rule::unique('indications')->ignore($id),
            ],
        ]);
        indication::where('id',$id)->update([
            'code_indication' => $request->code_indication,
            'indication' => $request->indication,
        ]);
        return redirect()->route('indication-doctor')->with('success-update-indication', 'Data Indication Update Successfully');
    }
    public function delete_indication($id){
        indication::where('id', $id)->delete();
        return redirect()->route('indication-doctor');
    }
    public function report_indication(){
        $indications = indication::all();
        $array = [
            'indications' => $indications,
        ];
        $pdf = Pdf::loadView('pages.doctor-layout.indication.report-indication', $array);
        return $pdf->download('report-indications-' .Carbon::now()->timestamp.'.pdf');
    }
}
