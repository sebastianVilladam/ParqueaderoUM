<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //$table->unsignedBigInteger('info_id')->nullable();
            $table->unsignedBigInteger('role_id')->default(1);
            $table->unsignedBigInteger('uni_id')->nullable();
            $table->string('company')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('uni_id')->references('id')->on('universities')->onDelete('restrict')->onUpdate('cascade');
            //$table->foreign('info_id')->references('id')->on('watchmen')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
