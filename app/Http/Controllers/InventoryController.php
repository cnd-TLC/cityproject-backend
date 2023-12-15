<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestedItem;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RequestedItem::all();
    }

    public function specificItem($id=null)
    {
        return RequestedItem::find($id);
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
        $item = new RequestedItem;
        $item->item_id = $request->item_id;
        $item->pr_no = $request->pr_no;
        $item->unit = $request->unit;
        $item->item_description = $request->item_description;
        $item->qty = $request->qty;
        $item->unit_cost = $request->unit_cost;
        $result = $item->save();

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
        $item = RequestedItem::find($id);
        $item->item_id = $request->item_id;
        $item->pr_no = $request->pr_no;
        $item->unit = $request->unit;
        $item->item_description = $request->item_description;
        $item->qty = $request->qty;
        $item->unit_cost = $request->unit_cost;
        $result = $item->save();

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
        $item = RequestedItem::find($id);
        $result = $item->delete();

        if($result)
            return response([
                'message' => ['Data removed.']
            ], 200);
        return response([
                'message' => ['Operation failed.']
            ], 400);
    }
}
