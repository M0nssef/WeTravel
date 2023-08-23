<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('airline', function (Blueprint $table) {
            $table->id('airline_id');
            $table->string('Country');
            $table->string('Depart');
            $table->string('Retour');
            $table->string('Image');
            $table->date('date_Aller');
            $table->date('date_Retour');
            $table->text('description');
            $table->integer('price');
            $table->integer('capacity');
            $table->boolean('available')->default(true);
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
