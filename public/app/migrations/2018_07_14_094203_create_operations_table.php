<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('devis_id')->unsigned();
            $table->integer('infrastructure_id')->unsigned();
            $table->integer('equipement_id')->unsigned();
            $table->integer('cabinet_id')->unsigned();
            $table->integer('incident_id')->unsigned();
            $table->string('typeoperation');
            $table->string('moderesolution');
            $table->date('datedebut');
            $table->date('datefin');
            $table->float('cout');
            $table->foreign('infrastructure_id')->references('id')->on('infrastructures');
            $table->foreign('equipement_id')->references('id')->on('equipements');
            $table->foreign('incident_id')->references('id')->on('incidents');
            $table->foreign('cabinet_id')->references('id')->on('cabinets');
            $table->foreign('devis_id')->references('id')->on('devis');
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
