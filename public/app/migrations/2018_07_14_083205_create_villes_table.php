<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pays_id')->unsigned();
            $table->string('nomville');
            $table->string('region');
            $table->string('departement');
            $table->integer('nombrequartier');
            $table->integer('population');
            $table->foreign('pays_id')->references('id')->on('pays');
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villes');
    }
}
