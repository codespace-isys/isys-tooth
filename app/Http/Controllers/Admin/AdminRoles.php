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
    function store_roles(Request $request){
        $roles = new Role();
        $request->validate([
            'role' => 'required',
        ],[
            'role.required' => 'role wajib diisi',
        ]);
        $roles = Role::Create([
            'role' => $request->role,
        ]);
        $roles->save();
        return redirect()->route('roles-admin');
    }
    function update_roles(Request $request){
        $request->validate([
            'role' => 'required',
        ],[
            'role.required' => 'role wajib diisi',
        ]);
        $id = $request->id_role;
        Role::where('id',$id)->update([
            'role' => $request->input('role'),
        ]);
        return redirect()->route('roles-admin');
    }
    function delete_roles($id){
        Role::where('id',$id)->delete();
        return redirect()->route('roles-admin');
    }
}
