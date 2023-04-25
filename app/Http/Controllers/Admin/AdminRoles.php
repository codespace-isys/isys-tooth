<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

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
            'role_store' => 'required|unique:roles,role',
        ]);
        $roles = Role::Create([
            'role' => $request->role_store,
        ]);
        $roles->save();
        return redirect()->route('roles-admin')->with('success-store-roles', 'Data'.$request->role_store.' Saved Successfully');
    }
    function update_roles(Request $request){
        $id = $request->id_role;
        $request->validate([
            'role' => [
                'required',
                Rule::unique('roles')->ignore($id)
            ],
        ]);
        Role::where('id',$id)->update([
            'role' => $request->role,
        ]);
        return redirect()->route('roles-admin')->with('success-store-roles', 'Data'.$request->role.' Update Successfully');
    }
    function delete_roles($id){
        Role::where('id',$id)->delete();
        return redirect()->route('roles-admin');
    }
}
