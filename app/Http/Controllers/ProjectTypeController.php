<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\ProjectType as ProjectTypeResource;
use App\ProjectType;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   ProjectTypeController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class ProjectTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  ProjectTypeResource::collection(ProjectType::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       ProjectType::create($request->all());
       return response()->json(['message' => ' ProjectType Successfully created']);

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
        return new ProjectTypeResource(ProjectType::findOrFail($id));
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

        $projecttype =ProjectType::findOrFail($id);
        $projecttype->update($request->all());
        return response()->json(['message' => ' ProjectType Successfully updated !']);
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
        $projecttype = ProjectType::findOrFail($id);
        $projecttype->delete();
        return response()->json(['message' => ' ProjectType Successfully deleted !']);
    }

}
