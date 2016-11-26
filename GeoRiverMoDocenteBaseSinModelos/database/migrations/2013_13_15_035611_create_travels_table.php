<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetravelsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('idActivity')->unsigned()->unique();
			$table->foreign('idActivity')->references('id')->on('activities');
            $table->text('nameTravel');
            $table->text('description');
            $table->text('course');
            $table->text('password');
            $table->text('state');
            $table->text('programme');
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
        Schema::drop('travels');
    }
}
