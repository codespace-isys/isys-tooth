<?php

namespace App\Http\Controllers\Admin;

use App\Models\Results;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminResult extends Controller
{
    function index (){
        $results = Results::all();
        $array = [
            'results' => $results,
        ];
        return view('pages.admin-layout.result.result', $array);
    }
}
