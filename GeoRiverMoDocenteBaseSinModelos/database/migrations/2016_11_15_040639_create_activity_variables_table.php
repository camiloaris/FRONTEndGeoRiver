<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateactivityVariablesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_variables', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('id_activity');
			$table->foreign('id_activity')->references('id')->on('activities');
            $table->integer('idVariable');
			$table->foreign('idVariable')->references('id')->on('variables');
			
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
        Schema::drop('activity_variables');
    }
}
