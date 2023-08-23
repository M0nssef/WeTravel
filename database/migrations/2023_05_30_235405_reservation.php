<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->unsignedBigInteger('reservation_passenger_id');
            $table->foreign('reservation_passenger_id')->references('passenger_id')->on('passenger');
            $table->unsignedBigInteger('reservation_airline_id');
            $table->foreign('reservation_airline_id')->references('airline_id')->on('airline');
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
        //
        Schema::dropIfExists('airline');
    }
};
