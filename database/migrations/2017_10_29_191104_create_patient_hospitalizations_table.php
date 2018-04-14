<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientHospitalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_hospitalizations', function (Blueprint $table) {
            $table->integer('id_patient')->unsigned();
            $table->integer('id_hospitalization_reasons')->unsigned();
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->foreign('id_hospitalization_reasons')->references('id')->on('hospitalization_reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_hospitalizations');
    }
}
