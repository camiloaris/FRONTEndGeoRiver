<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatevariableCuantitativasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variable_cuantitativas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->integer('latitud');
            $table->integer('longitud');
            $table->decimal('valor');
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
        Schema::drop('variable_cuantitativas');
    }
}
