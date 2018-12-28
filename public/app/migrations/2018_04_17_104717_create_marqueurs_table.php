<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarqueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typemarqueur_id')->unsigned();
            $table->string('nommarqueur');
            $table->string('photo');
            $table->string('type');
            $table->string('lieu');
            $table->text('description')->nullable();
            $table->float('longitude');
            $table->float('latitude');
            $table->foreign('typemarqueur_id')->references('id')->on('typesmarqueurs');
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marqueurs');
    }
}
