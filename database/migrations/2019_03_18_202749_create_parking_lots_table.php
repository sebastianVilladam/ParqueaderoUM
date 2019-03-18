<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_lots', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('university_id');
            $table->string('name');
            $table->string('adress');
            $table->string('phone_number');
            $table->smallInteger('capacity');
            $table->timestamps();

            $table->foreign('university_id')->references('id')->on('universities')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_lots');
    }
}
