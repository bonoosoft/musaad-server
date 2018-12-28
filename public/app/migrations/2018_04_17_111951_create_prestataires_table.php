<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cabinet_id')->unsigned();
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('nationalite');
            $table->string('specialite');
            $table->string('adresse');
            $table->integer('telephone');
            $table->string('email');
            $table->string('profil');
            $table->foreign('cabinet_id')->references('id')->on('cabinets');
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
        Schema::dropIfExists('prestataires');
    }
}
