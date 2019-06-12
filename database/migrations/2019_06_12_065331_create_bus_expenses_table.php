<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_expenses', function (Blueprint $table) {
            $table->increments('expense_id');
            $table->string('bus_no',50);
            $table->double('diesel_expense')->nullable();
            $table->double('cleaner_expense')->nullable();
            $table->double('food_expense')->nullable();
            $table->double('parking_expense')->nullable();
            $table->double('toll_expense')->nullable();
            $table->double('other_expense')->nullable();
            $table->text('bills')->nullable();
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
        Schema::dropIfExists('bus_expenses');
    }
}
