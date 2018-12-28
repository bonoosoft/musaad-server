<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the migration class   CreateProjectdescriptionsTable
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/



class CreateProjectdescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('projectdescriptions', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
$table->text('description');

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
        Schema::drop('projectdescriptions');
    }

}
