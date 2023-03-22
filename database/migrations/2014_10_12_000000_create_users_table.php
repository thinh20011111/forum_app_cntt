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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('background')->nullable();
            $table->string('birthday')->nullable();
            $table->string('adress')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('bio')->nullable();
            $table->string('class')->nullable();
            $table->string('status')->nullable();
            $table->tinyInteger('level');


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
