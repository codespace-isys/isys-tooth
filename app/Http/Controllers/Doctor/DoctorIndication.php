<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\indication;
use App\Helpers\Helper;
use Illuminate\Http\Request;

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
            'code_indication' => 'required',
            'indication' => 'required',
        ],[
            'code_indication.required' => 'code indication wajib diisi',
            'indication.required' => 'indication wajib diisi',
        ]);
        $indications = indication::Create([
            'code_indication' => $request->code_indication,
            'indication' => $request->indication,
        ]);
        $indications->save();
        return redirect()->route('indication-doctor');
    }
    public function update_indication(Request $request){
        $request->validate([
            'code_indication' => 'required',
            'indication' => 'required',
        ],[
            'code_indication.required' => 'code indication wajib diisi',
            'indication.required' => 'indication wajib diisi',
        ]);
        $id = $request->id_indication;
        indication::where('id',$id)->update([
            'code_indication' => $request->code_indication,
            'indication' => $request->indication,
        ]);
        return redirect()->route('indication-doctor');
    }
    public function delete_indication($id){
        indication::where('id', $id)->delete();
        return redirect()->route('indication-doctor');
    }
}
