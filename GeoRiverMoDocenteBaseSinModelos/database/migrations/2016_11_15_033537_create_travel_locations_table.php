<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetravelLocationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_locations', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('idTravel');
			$table->foreign('idTravel')->references('id')->on('travels');
            $table->integer('idLocation');
			$table->foreign('idLocation')->references('id')->on('locations');
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
        Schema::drop('travel_locations');
    }
}
