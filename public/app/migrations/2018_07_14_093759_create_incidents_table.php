<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infrastructure_id')->unsigned();
            $table->integer('equipement_id')->unsigned();
            $table->string('typeincident');
            $table->string('etat');
            $table->date('date');
            $table->text('description')->nullable();
            $table->datetime('deleted_at')->nullable();
            $table->string('photo');
            $table->foreign('infrastructure_id')->references('id')->on('infrastructures');
            $table->foreign('equipement_id')->references('id')->on('equipements');
            $table->timestamps();
        });     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');
    }
}
