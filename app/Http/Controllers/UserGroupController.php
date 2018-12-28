<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\UserGroup as UserGroupResource;
use App\UserGroup;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   UserGroupController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class UserGroupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  UserGroupResource::collection(UserGroup::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       UserGroup::create($request->all());
       return response()->json(['message' => ' UserGroup Successfully created']);

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
        return new UserGroupResource(UserGroup::findOrFail($id));
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

        $usergroup =UserGroup::findOrFail($id);
        $usergroup->update($request->all());
        return response()->json(['message' => ' UserGroup Successfully updated !']);
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
        $usergroup = UserGroup::findOrFail($id);
        $usergroup->delete();
        return response()->json(['message' => ' UserGroup Successfully deleted !']);
    }

}
