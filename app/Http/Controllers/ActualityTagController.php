<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\ActualityTag as ActualityTagResource;
use App\ActualityTag;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   ActualityTagController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class ActualityTagController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  ActualityTagResource::collection(ActualityTag::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       ActualityTag::create($request->all());
       return response()->json(['message' => ' ActualityTag Successfully created']);

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
        return new ActualityTagResource(ActualityTag::findOrFail($id));
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

        $actualitytag =ActualityTag::findOrFail($id);
        $actualitytag->update($request->all());
        return response()->json(['message' => ' ActualityTag Successfully updated !']);
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
        $actualitytag = ActualityTag::findOrFail($id);
        $actualitytag->delete();
        return response()->json(['message' => ' ActualityTag Successfully deleted !']);
    }

}
