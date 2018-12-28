<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Notification as NotificationResource;
use App\Notification;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   NotificationController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class NotificationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  NotificationResource::collection(Notification::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       Notification::create($request->all());
       return response()->json(['message' => ' Notification Successfully created']);

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
        return new NotificationResource(Notification::findOrFail($id));
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

        $notification =Notification::findOrFail($id);
        $notification->update($request->all());
        return response()->json(['message' => ' Notification Successfully updated !']);
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
        $notification = Notification::findOrFail($id);
        $notification->delete();
        return response()->json(['message' => ' Notification Successfully deleted !']);
    }

}
