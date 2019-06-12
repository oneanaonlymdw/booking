<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoPassTicketBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_pass_ticket_bookings', function (Blueprint $table) {
            $table->increments('co_pass_ticket_id');
            $table->integer('pnr_no')->unsigned();
            $table->foreign('pnr_no')->references('pnr_no')->on('ticket_bookings');
            $table->string('co_pass_name',100);
            $table->integer('co_pass_age');
            $table->string('co_pass_gender',10);
            $table->string('co_pass_seat',5);
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
        Schema::dropIfExists('co_pass_ticket_bookings');
    }
}
