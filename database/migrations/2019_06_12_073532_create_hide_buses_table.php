<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHideBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hide_buses', function (Blueprint $table) {
            $table->increments('hide_bus_id');
            $table->integer('bus_id')->unsigned();
            $table->foreign('bus_id')->references('bus_id')->on('buses');
            $table->date('hide_from');
            $table->date('hide_to');
            $table->text('hide_reason')->nullable();
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
        Schema::dropIfExists('hide_buses');
    }
}
