<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBénévolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bénévoles', function (Blueprint $table) {
            $table->id();
            $table->integer('nni');
            $table->string('nom');
            $table->string('prenom');
            $table->date('daten');
            $table->integer('age');
            $table->integer('tel');
            $table->string('metier');
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
        Schema::dropIfExists('bénévoles');
    }
}
