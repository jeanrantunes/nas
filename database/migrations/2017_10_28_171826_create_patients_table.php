<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',40);
            $table->date('birthday');
            $table->dateTime('hospitalization');
            $table->enum('bed', ['A','B','C','D','E','F']);
            $table->enum('outcome',['Alta','Óbito'])->nullable();
            $table->dateTime('outcome_date')->nullable();
            $table->smallInteger('saps_iii');
            $table->integer('id_origin')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->timestamps();
            $table->foreign('id_origin')->references('id')->on('origins');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
