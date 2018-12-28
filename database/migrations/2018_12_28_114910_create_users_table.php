<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the migration class   CreateUsersTable
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/



class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('users', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
$table->string('username');
$table->string('email');
$table->string('password');
$table->boolean('is_active');
$table->date('birth');
$table->date('join_date');
$table->string('facebook_link');
$table->string('twitter_link');
$table->string('confirmation_token');
$table->string('reset_token');
$table->integer('role');

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
