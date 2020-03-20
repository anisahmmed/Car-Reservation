<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('pickupdate');
            $table->date('dropoffdate');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->integer('customer_phone');
            $table->string('city');
            $table->longText('full_address');
            $table->string('car_model');
            $table->string('driver');
            $table->string('driver_email');
            $table->integer('duration');
            $table->integer('total_cost');
            $table->integer('payment_status');
            $table->softDeletes();
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
        Schema::dropIfExists('reservations');
    }
}
