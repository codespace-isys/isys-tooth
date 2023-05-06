<?php

namespace App\Http\Controllers\Users;

use App\Models\Results;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserResult extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    public function index(){
        $results = Results::all();
        $array = [
            'results' => $results,
           
        ];
        return view('/pages/users-layout/result/result', $array);
    }
}
