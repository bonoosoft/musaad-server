<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the model   ActualityShare
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/



class ActualityShare extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actualityshares';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['actuality', 'share', 'user'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
