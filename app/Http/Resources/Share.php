<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the resource   Share
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class Share extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

        'shared_on'=>$this->shared_on,'sharer'=>$this->sharer,'description'=>$this->description,'project'=>$this->project,'user'=>$this->user,'payment'=>$this->payment,'event'=>$this->event
        
        ];
    }
}
