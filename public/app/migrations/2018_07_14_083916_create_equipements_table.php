<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeequipement_id')->unsigned();
            $table->integer('quartier_id')->unsigned();
            $table->string('libelle');
            $table->string('marque');
            $table->string('type');
            $table->string('numeroserie');
            $table->string('niveauisolement');
            $table->string('natureenroulement');
            $table->string('couplage');
            $table->string('typerefroidissement');
            $table->string('massehuile');
            $table->string('capacite');
            $table->string('poids');
            $table->string('photo');
            $table->date('dateacquisition');
            $table->string('utilisation');
            $table->string('etat');
            $table->float('prix');
            $table->string('technologie');
            $table->foreign('typeequipement_id')->references('id')->on('categoriesequipements');
            $table->datetime('deleted_at')->nullable();
            $table->foreign('quartier_id')->references('id')->on('quartiers');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipements');
    }
}
