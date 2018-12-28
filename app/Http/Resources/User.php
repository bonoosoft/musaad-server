<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the resource   User
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class User extends Resource
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

        'name'=>$this->name,'username'=>$this->username,'email'=>$this->email,'password'=>$this->password,'is_active'=>$this->is_active,'birth'=>$this->birth,'join_date'=>$this->join_date,'facebook_link'=>$this->facebook_link,'twitter_link'=>$this->twitter_link,'confirmation_token'=>$this->confirmation_token,'reset_token'=>$this->reset_token,'role'=>$this->role
        
        ];
    }
}
