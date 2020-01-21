<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function index(Role $model){
    	return view('roles.index',['roles'=>$model->paginate(5)]);
    }
   public function create(){
        return view('roles.create');
    }
    public function store(Request $request){
        $role = new Role;
        $role->name = $request->name;
        $role->save();

        return redirect()->route('role.index')->withStatus(_('Role Succesfully Created'));
    }
    public function show($id){

    }
    public function edit($id){
        $role = Role::find($id);
        return view('roles.edit',compact('role'));
    }
    public function update(Request $request, $id){
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        return redirect()->route('role.index')->withStatus(_('Role Succesfully Update'));
    }
    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('role.index')->withStatus(_('Role Succesfully Delete'));
    }
}
