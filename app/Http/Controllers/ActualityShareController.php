<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\ActualityShare as ActualityShareResource;
use App\ActualityShare;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   ActualityShareController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class ActualityShareController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  ActualityShareResource::collection(ActualityShare::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       ActualityShare::create($request->all());
       return response()->json(['message' => ' ActualityShare Successfully created']);

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
        return new ActualityShareResource(ActualityShare::findOrFail($id));
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

        $actualityshare =ActualityShare::findOrFail($id);
        $actualityshare->update($request->all());
        return response()->json(['message' => ' ActualityShare Successfully updated !']);
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
        $actualityshare = ActualityShare::findOrFail($id);
        $actualityshare->delete();
        return response()->json(['message' => ' ActualityShare Successfully deleted !']);
    }

}
