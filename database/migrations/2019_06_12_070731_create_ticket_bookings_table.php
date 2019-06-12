<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_bookings', function (Blueprint $table) {
            $table->increments('pnr_no');
            $table->integer('bus_id')->unsigned();
            $table->foreign('bus_id')->references('bus_id')->on('buses');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('passenger_name', 100);
            $table->integer('passenger_age');
            $table->string('passenger_gender', 10);
            $table->string('passenger_mobile', 15);
            $table->string('passenger_alt_mobile', 15)->nullable();
            $table->string('passenger_email', 100);
            $table->string('passenger_seat', 5);
            $table->integer('co_passengers');
            $table->date('booking_date')->dafault(DB::raw('NOW()'));
            $table->date('journey_date');
            $table->string('boarding_point',255);
            $table->string('dropping_point',255);
            $table->double('ticket_fare');
            $table->double('discount');
            $table->string('discount_code', 10);
            $table->double('paid');
            $table->double('balance');
            $table->string('payment_mode', 100);
            $table->string('transaction_id', 255);
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
        Schema::dropIfExists('ticket_bookings');
    }
}
