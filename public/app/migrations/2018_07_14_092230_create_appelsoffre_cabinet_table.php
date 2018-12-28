<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppelsoffreCabinetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appelsoffre_cabinet', function (Blueprint $table) {
            $table->integer('cabinet_id')->unsigned();
            $table->integer('appeloffre_id')->unsigned();
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
        Schema::dropIfExists('appelsoffre_cabinet');
    }
}
