<?php

namespace App\Http\Controllers\Users;

use App\Models\Sickness;
use App\Models\indication;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
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
        $indications = indication::all();
        $sicknesses = Sickness::all();
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
            dd($max_keys[0]);
        }else{
            return redirect()->back();
        }

        $arrayShow = [
            // 'result' => $result,
            // 'indications' => $indications,
            // 'sicknesses' => $sicknesses,
            // 'duplicated' => $duplicated,
            // 'request_indication' => $selectedIndication,
        ];
        return view('/pages/users-layout/consultation/result-consultation',  $arrayShow );
    }
}
