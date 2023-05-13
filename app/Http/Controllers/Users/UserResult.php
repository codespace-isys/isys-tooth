<?php

namespace App\Http\Controllers\Users;

use App\Models\Results;
use App\Models\medicine;
use App\Models\indication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserResult extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    public function index(){
        $results = Results::where('user_id', '=', auth()->user()->id)->get();
        $indications = indication::all();
        $medicines = medicine::all();
        $array = [
            'results' => $results,
            'indications' => $indications,
            'medicines' => $medicines,    
        ];
        return view('/pages/users-layout/result/result', $array);
    }
}
