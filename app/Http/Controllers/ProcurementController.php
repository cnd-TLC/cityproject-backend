<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseRequest;

class ProcurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PurchaseRequest::all();
    }

    public function specificPR($id=null)
    {
        return PurchaseRequest::find($id);
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
        // PROCURE ITEMS FUNCTION
        $purchase_request = new PurchaseRequest;
        $purchase_request->pr_no = $request->pr_no;
        $purchase_request->fund = $request->fund;
        $purchase_request->cash_availability = $request->cash_availability;
        $purchase_request->fpp = $request->fpp;
        $purchase_request->purpose = $request->purpose;
        $purchase_request->date_of_request = $request->date_of_request;
        $result = $purchase_request->save();

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
        $purchase_request = PurchaseRequest::find($id);
        $purchase_request->pr_no = $request->pr_no;
        $purchase_request->fund = $request->fund;
        $purchase_request->cash_availability = $request->cash_availability;
        $purchase_request->fpp = $request->fpp;
        $purchase_request->purpose = $request->purpose;
        $purchase_request->date_of_request = $request->date_of_request;
        $result = $purchase_request->save();

        if($result)
            return response([
                'message' => ['Data saved.']
            ], 201);
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
        $purchase_request = PurchaseRequest::find($id);
        $result = $purchase_request->delete();

        if($result)
            return response([
                'message' => ['Data removed.']
            ], 200);
        return response([
                'message' => ['Operation failed.']
            ], 400);
    }
}
