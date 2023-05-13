<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Results;
use App\Models\User;
class UsersDashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    function dashboard()
    { 
        $results = Results::where('user_id', '=', auth()->user()->id)->get();;
        $countResults = Results::count();
        $array = [
            'results' => $results,
            'countResults' => $countResults,
        ];
        return view('/pages/users-layout/dashboard', $array);
    }
}
