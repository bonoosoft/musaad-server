<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the model   ProjectDescription
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/



class ProjectDescription extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projectdescriptions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
