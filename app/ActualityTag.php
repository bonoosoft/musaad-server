<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the model   ActualityTag
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/



class ActualityTag extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actualitytags';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['actuality', 'tag'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
