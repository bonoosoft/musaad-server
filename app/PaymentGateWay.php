<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the model   PaymentGateWay
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/



class PaymentGateWay extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paymentgateways';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
