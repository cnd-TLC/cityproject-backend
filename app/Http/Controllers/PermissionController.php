<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Permission::all();
    }

    public function specificPermission($id=null)
    {
        return Permission::find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = new Permission;
        $permission->role_id = $request->role_id;
        $permission->module_id = $request->module_id;
        $result = $permission->save();

        if($result)
            return response([
                'message' => ['Data saved.']
            ], 201);
        return response([
                'message' => ['Operation failed.']
            ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->role_id = $request->role_id;
        $permission->module_id = $request->module_id;
        $result = $permission->save();

        if($result)
            return response([
                'message' => ['Data saved.']
            ], 200);
        return response([
                'message' => ['Operation failed.']
            ], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Permission::find($id);
        $result = $user->delete();

        if($result)
            return response([
                'message' => ['Data removed.']
            ], 200);
        return response([
                'message' => ['Operation failed.']
            ], 400);
    }
}
