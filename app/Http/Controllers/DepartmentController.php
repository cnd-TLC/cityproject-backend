<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Department::all();
    }

    public function specificDepartment($id=null)
    {
        return Department::find($id);
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
        $department = new Department;
        $department->department_name = $request->department_name;
        $result = $department->save();

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
        $department = Department::find($id);
        $department->department_name = $request->department_name;
        $result = $department->save();

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
        $user = Department::find($id);
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
