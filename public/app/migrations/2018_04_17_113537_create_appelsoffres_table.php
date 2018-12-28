<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppelsoffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appelsoffres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ministere_id')->unsigned();
            $table->integer('projet_id')->unsigned();
            $table->string('libelleappeloffre');
            $table->string('objet');
            $table->string('critereoffre');
            $table->text('description')->nullable();
            $table->foreign('ministere_id')->references('id')->on('ministeres');
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
        Schema::dropIfExists('appelsoffres');
    }
}
