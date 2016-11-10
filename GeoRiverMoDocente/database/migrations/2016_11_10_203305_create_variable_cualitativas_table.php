<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatevariableCualitativasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variable_cualitativas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('valor');
            $table->integer('latitud');
            $table->integer('longitud');
            $table->integer('estandar');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('variable_cualitativas');
    }
}
