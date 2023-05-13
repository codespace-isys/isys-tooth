<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Article;
use App\Models\Results;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    function dashboard()
    {
        $users = User::where('role_id', '=', '3')->get();
        $countPatient = User::where('role_id', '=', '3')->count();
        $countDoctor = User::where('role_id', '=', '2')->count();
        $countAdmin = User::where('role_id', '=', '1')->count();
        $countRoles = Role::count();
        $countArticles = Article::count();
        $countResults = Results::count();
        $array = [
            'users' => $users,
            'countPatient' => $countPatient,
            'countDoctor' => $countDoctor,
            'countAdmin' => $countAdmin,
            'countRoles' => $countRoles,
            'countArticles' => $countArticles,
            'countResults' => $countResults,
        ];
        return view('/pages/admin-layout/dashboard', $array);
    }
}
