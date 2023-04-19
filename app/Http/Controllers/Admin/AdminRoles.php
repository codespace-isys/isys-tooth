<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoles extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    function index()
    {
        $roles = Role::all();
        $array = [
            'roles' => $roles
        ];
        return view('/pages/admin-layout/roles/roles', $array);
    }
}
