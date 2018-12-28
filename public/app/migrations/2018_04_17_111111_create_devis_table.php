<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cabinet_id')->unsigned();
            $table->integer('projet_id')->unsigned();
            $table->string('libelledevis');
            $table->string('fichier');
            $table->string('technologie');
            $table->foreign('cabinet_id')->references('id')->on('cabinets');
            $table->foreign('projet_id')->references('id')->on('projets');
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
        Schema::dropIfExists('devis');
    }
}
