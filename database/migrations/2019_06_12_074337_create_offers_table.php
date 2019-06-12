<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('offer_id');
            $table->string('offer_code', 10);
            $table->integer('offer_percentage');
            $table->double('minimum_ticket_fare');
            $table->double('minimum_discount');
            $table->double('maximum_discount');
            $table->date('valid_from');
            $table->date('valid_to');
            $table->integer('offer_use_per_user');
            $table->boolean('login_require');
            $table->text('offer_description');
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
        Schema::dropIfExists('offers');
    }
}
