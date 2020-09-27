<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;

class AdminController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    
    public function addRole(Request $request)
    {
        // validate request
        $this->validate($request, [
            'roleName' => 'required',
        ]);
        return Role::create([
            'roleName' => $request->roleName,
        ]);
    }
    public function editRole(Request $request)
    {
        // validate request
        $this->validate($request, [
            'roleName' => 'required',
        ]);
        return Role::where('id', $request->id)->update([
            'roleName' => $request->roleName,
        ]);
    }
    public function getRoles()
    {
        return Role::all();
    }

    public function assignRole(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'permission' => 'required',
        ]);
        return Role::where('id', $request->id)->update([
            'permission' => $request->permission,
        ]);
    }
}
