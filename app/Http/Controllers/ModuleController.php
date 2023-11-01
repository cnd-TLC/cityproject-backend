<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Module::all();
    }

    public function specificModule($id=null)
    {
        return Module::find($id);
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
        $module = new Module;
        $module->module_name = $request->module_name;
        $result = $module->save();

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
        $module = Module::find($id);
        $module->module_name = $request->module_name;
        $result = $module->save();

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
        $user = Module::find($id);
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
