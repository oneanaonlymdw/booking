<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('bus_id');
            $table->string('bus_name',100);
            $table->string('bus_no', 50);
            $table->integer('total_seats');
            $table->integer('seats_in_last_row');
            $table->integer('reserved_seats');
            $table->string('bus_type', 50);
            $table->string('bus_seat_type', 50);
            $table->string('bus_seats', 255);
            $table->string('window_seats', 255);
            $table->string('alt_fare_seats', 255);
            $table->date('bus_available_from');
            $table->date('bus_available_to');
            $table->string('bus_starting_point', 255);
            $table->string('bus_ending_point', 255);
            $table->time('bus_start_time');
            $table->time('bus_end_time');
            $table->string('bus_amenties', 255);
            $table->text('bus_pictures');
            $table->string('status', 50);
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
        Schema::dropIfExists('buses');
    }
}
