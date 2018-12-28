<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the model   Actuality
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/



class Actuality extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actualities';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'create_by'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
