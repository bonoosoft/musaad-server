<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Vote as VoteResource;
use App\Vote;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   VoteController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class VoteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  VoteResource::collection(Vote::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       Vote::create($request->all());
       return response()->json(['message' => ' Vote Successfully created']);

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
        return new VoteResource(Vote::findOrFail($id));
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

        $vote =Vote::findOrFail($id);
        $vote->update($request->all());
        return response()->json(['message' => ' Vote Successfully updated !']);
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
        $vote = Vote::findOrFail($id);
        $vote->delete();
        return response()->json(['message' => ' Vote Successfully deleted !']);
    }

}
