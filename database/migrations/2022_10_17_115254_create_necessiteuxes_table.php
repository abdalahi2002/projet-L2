<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNecessiteuxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necessiteuxes', function (Blueprint $table) {
            $table->id();
            $table->integer('nni');
            $table->string('nom');
            $table->string('prenom');
            $table->date('daten');
            $table->integer('tel');
            $table->integer('age');
            $table->string('besoin');
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
        Schema::dropIfExists('necessiteuxes');
    }
}
