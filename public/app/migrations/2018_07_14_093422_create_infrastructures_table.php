<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfrastructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infrastructures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typesinfrastructure_id')->unsigned();
            $table->integer('quartier_id')->unsigned();
            $table->string('nominfrastructure');
            $table->date('datecreation');
            $table->float('cout');
            $table->datetime('deleted_at')->nullable();
            $table->foreign('typesinfrastructure_id')->references('id')->on('typesinfrastructures');
            $table->foreign('quartier_id')->references('id')->on('quartiers');
            $table->timestamps();
        });     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infrastructures');
    }
}
