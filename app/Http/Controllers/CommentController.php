<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Comment as CommentResource;
use App\Comment;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Here is where the controller   CommentController
|
|@autor :
|@email :
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class CommentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  CommentResource::collection(Comment::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       Comment::create($request->all());
       return response()->json(['message' => ' Comment Successfully created']);

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
        return new CommentResource(Comment::findOrFail($id));
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

        $comment =Comment::findOrFail($id);
        $comment->update($request->all());
        return response()->json(['message' => ' Comment Successfully updated !']);
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
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return response()->json(['message' => ' Comment Successfully deleted !']);
    }

}
