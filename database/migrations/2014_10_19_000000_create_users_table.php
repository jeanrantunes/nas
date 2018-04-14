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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo');
            $table->string('permission');
            $table->date('birthday');
            $table->integer('id_hospital')->unsigned();
            $table->integer('id_occupation')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_hospital')->references('id')->on('hospitals');
            $table->foreign('id_occupation')->references('id')->on('occupations');
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
