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
        Schema::create('passenger', function (Blueprint $table) {
            $table->id('passenger_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('address');
            $table->boolean('role')->default(false);
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
    }
};
