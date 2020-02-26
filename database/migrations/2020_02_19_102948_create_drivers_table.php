<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver_name');
            $table->string('driver_email')->unique();
            $table->integer('driver_contact')->nullable();
            $table->string('driver_image')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('driver_permanent_address')->nullable();
            $table->string('driver_present_address')->nullable();
            $table->integer('driver_licence_no')->nullable();
            $table->integer('experience')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
