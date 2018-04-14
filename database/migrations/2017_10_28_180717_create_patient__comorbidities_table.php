<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientComorbiditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient__comorbidities', function (Blueprint $table) {
            $table->integer('id_patient')->unsigned();
            $table->integer('id_comorbidities')->unsigned();
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->foreign('id_comorbidities')->references('id')->on('comorbidities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient__comorbidities');
    }
}
