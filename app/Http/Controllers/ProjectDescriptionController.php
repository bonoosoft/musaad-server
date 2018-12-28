<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\ProjectDescription as ProjectDescriptionResource;
use App\ProjectDescription;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   ProjectDescriptionController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class ProjectDescriptionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  ProjectDescriptionResource::collection(ProjectDescription::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       ProjectDescription::create($request->all());
       return response()->json(['message' => ' ProjectDescription Successfully created']);

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
        return new ProjectDescriptionResource(ProjectDescription::findOrFail($id));
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

        $projectdescription =ProjectDescription::findOrFail($id);
        $projectdescription->update($request->all());
        return response()->json(['message' => ' ProjectDescription Successfully updated !']);
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
        $projectdescription = ProjectDescription::findOrFail($id);
        $projectdescription->delete();
        return response()->json(['message' => ' ProjectDescription Successfully deleted !']);
    }

}
