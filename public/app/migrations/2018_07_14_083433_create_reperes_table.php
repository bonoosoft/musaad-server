<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReperesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reperes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quartier_id')->unsigned();
            $table->string('nomrepere');
            $table->double('longitude');
            $table->double('latitude');
            $table->foreign('quartier_id')->references('id')->on('quartiers');
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
        Schema::dropIfExists('reperes');
    }
}
