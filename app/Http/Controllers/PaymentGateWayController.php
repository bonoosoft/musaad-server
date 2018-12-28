<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\PaymentGateWay as PaymentGateWayResource;
use App\PaymentGateWay;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   PaymentGateWayController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class PaymentGateWayController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  PaymentGateWayResource::collection(PaymentGateWay::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       PaymentGateWay::create($request->all());
       return response()->json(['message' => ' PaymentGateWay Successfully created']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        return new PaymentGateWayResource(PaymentGateWay::findOrFail($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {

        $paymentgateway =PaymentGateWay::findOrFail($id);
        $paymentgateway->update($request->all());
        return response()->json(['message' => ' PaymentGateWay Successfully updated !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paymentgateway = PaymentGateWay::findOrFail($id);
        $paymentgateway->delete();
        return response()->json(['message' => ' PaymentGateWay Successfully deleted !']);
    }

}
