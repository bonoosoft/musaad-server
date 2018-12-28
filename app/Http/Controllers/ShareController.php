<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Share as ShareResource;
use App\Share;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   ShareController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class ShareController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  ShareResource::collection(Share::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       Share::create($request->all());
       return response()->json(['message' => ' Share Successfully created']);

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
        return new ShareResource(Share::findOrFail($id));
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

        $share =Share::findOrFail($id);
        $share->update($request->all());
        return response()->json(['message' => ' Share Successfully updated !']);
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
        $share = Share::findOrFail($id);
        $share->delete();
        return response()->json(['message' => ' Share Successfully deleted !']);
    }

}
