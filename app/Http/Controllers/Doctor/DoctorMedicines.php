<?php

namespace App\Http\Controllers\Doctor;

use Carbon\Carbon;
use App\Models\medicine;
use App\Helpers\MedicineHelper;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class DoctorMedicines extends Controller
{
    public function __construct()
    {
        $this->middleware('is_doctor');
    }
    
    function index()
    {
        $medicines = medicine::all();
        $medicine_code = MedicineHelper::IDGenerator(new medicine, 'medicine_code', '4', 'MDC');
        $array = [
            'medicines' => $medicines,
            'medicine_code' => $medicine_code,
        ];
        return view('/pages/doctor-layout/medicine/medicine', $array);
    }
    function store_medicine(Request $request){
        $medicines = new medicine();
        $request->validate([
            'medicine_code_store' => 'required|unique:medicines,medicine_code',
            'medicine_name_store' => 'required|unique:medicines,medicine_name',
            'medicine_information_store' => 'required',
        ]);
        $medicines = medicine::Create([
            'medicine_code' => $request->medicine_code_store,
            'medicine_name' => $request->medicine_name_store,
            'medicine_information' => $request->medicine_information_store,
        ]);
        $medicines->save();
        return redirect()->route('medicine-doctor')->with('success-store-medicine', 'Data '.$request->medicine_name_store. ' Saved Successfully');
    }
    function update_medicine(Request $request)
    {
        $id = $request->id_medicine;
        $request->validate([
            'medicine_code' => 
            [
                'required',
                Rule::unique('medicines')->ignore($id),
            ],
            'medicine_name' => 
            [
                'required',
                Rule::unique('medicines')->ignore($id),
            ],
            'medicine_information' => 'required',
        ]);
        medicine::where('id',$id)->update([
            'medicine_code' => $request->input('medicine_code'),
            'medicine_name' => $request->input('medicine_name'),
            'medicine_information' => $request->input('medicine_information'),
        ]);
        return redirect()->route('medicine-doctor')->with('success-update-medicine', 'Data '.$request->medicine_name. ' Update Successfully');
    }
    public function delete_medicine($id){
        medicine::where('id', $id)->delete();
        return redirect()->route('medicine-doctor');
    }
    public function report_medicine(){
        $medicines = medicine::all();
        $array = [
            'medicines' => $medicines,
        ];
        $pdf = Pdf::loadView('pages.doctor-layout.medicine.report-medicine', $array);
        return $pdf->download('report-medicines-' .Carbon::now()->timestamp.'.pdf');
    }
}
