<?php

namespace App\Http\Controllers\Users;

use Carbon\Carbon;
use App\Models\Results;
use App\Models\medicine;
use App\Models\Sickness;
use App\Models\indication;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Models\indication_sickness;
use App\Http\Controllers\Controller;

class UsersConsultation extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    function index()
    { 
        $indications = indication::all();
        $sicknesses = Sickness::all();
        $selectedIndication = [1, 3];
        $indication = indication_sickness::whereIn('indication_id', $selectedIndication)->get();
        $array = [
            'indications' => $indications,
            'sicknesses' => $sicknesses,
            'indication' => $indication,
        ];
        return view('/pages/users-layout/consultation/consultation', $array);
    }
    function cek_diagnosis (Request $request){
        $results = new Results();
        $DataRegulation = indication_sickness::all();
        $selectedIndication= $request->indication;
        $regulation = [];
        foreach ($DataRegulation as $item){
            if(!isset($regulation[$item->sickness_id])){
                $regulation[$item->sickness_id] = [];
            }
            array_push($regulation[$item->sickness_id], $item->indication_id);
        }
        $result = [];
        foreach($regulation as $key => $rules){
            foreach ($selectedIndication as $select){ 
                if(in_array($select, $rules)){
                    if(!isset($result[$key])){
                        $result[$key] = 1;
                    }else{
                        $result[$key] = $result[$key] + 1;
                    }
                }
            }
        }
        if (count($result) > 0){
            $max_keys = array_keys($result, max($result));
            $sickness = Sickness::where('id', '=', $max_keys[0])->get();
            $indications = indication::all();
            $arrayShow = [
                'result' => $sickness,
                'indications' => $indications,
                'found' =>'Your Sickness Diagnosis Has Been Found'
            ];
            $myTime = Carbon::now();
            $results = Results::Create([
                'datetime' => $myTime->toDateTimeString(),
                'sickness_id' =>  $max_keys[0],
                'user_id' => auth()->user()->id,
            ]);
            $results->indication()->attach($request->indication);
            $results->save();
            return view('/pages/users-layout/consultation/result-consultation',  $arrayShow );
        }else{
            return redirect()->back()->with('failed-diagnosis', "Sickness wasn't found");
        }
    }
    function export_diagnosis(){
        $data = Results::latest()->first();
        $indications = indication::all();
        $medicines = medicine::all();
        $array = [
            'data' => $data,
            'indications' => $indications,
            'medicines' => $medicines,
        ];
        $pdf = Pdf::loadView('pages.users-layout.consultation.export-consultation', $array);
        return $pdf->download('export-consultation-' .Carbon::now()->timestamp.'.pdf');
    }
}
