<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_buses', function (Blueprint $table) {
            $table->increments('bus_route_id');
            $table->integer('route_id')->unsigned();
            $table->foreign('route_id')->references('route_id')->on('routes');
            $table->integer('bus_id')->unsigned();
            $table->foreign('bus_id')->references('bus_id')->on('buses');
            $table->text('bus_pickup_points');
            $table->text('bus_drop_points');
            $table->text('bus_pickup_times');
            $table->text('bus_drop_times');
            $table->string('route_fares',100);
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
        Schema::dropIfExists('routebuses');
    }
}
