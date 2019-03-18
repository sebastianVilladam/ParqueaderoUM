<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('parkingLot_id');
            $table->string('veichle_plate');
            $table->dateTime('hour');
            $table->string('action');
            $table->string('observations');
            $table->timestamps();

            $table->foreign('parkingLot_id')->references('id')->on('parking_lots')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking');
    }
}
