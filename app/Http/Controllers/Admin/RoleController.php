<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Validator;
class RoleController extends Controller
{
    public function index(){
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create(){
        return view('admin.roles.create');
    }

    public function store(Request $request){
        // $rules = [
        //     'name' => "required",
        // ];

        // $validator = Validator::make($request->all(),$rules);
       
        // if(!$validator->fails()){ dd('Pass');
        //     $role = Role::create($request->all());
        //     return to_route('admin.roles.index');
        // }else{
        //     $validator->errors();
            
        // }
        $validated = $request->validate(['name' => ['required']]);

        Role::create($validated);
        return to_route('admin.roles.index')->with('message','Role Created Successfully.');
    }

    public function edit(Role $role){
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role ){
        $validated = $request->validate(['name' => ['required']]);
        $role = Role::find($role->id);
        $role->update($validated);
        return to_route('admin.roles.index')->with('message', 'Role Updated Successfuly.');
    }

    public function destroy(Role $role){
        $role->delete();
        return back()->with('message', 'Role '.$role->name.' deleted successfully.');
    }
}
