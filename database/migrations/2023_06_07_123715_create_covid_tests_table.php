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
        Schema::create('covid_tests', function (Blueprint $table) {
            $table->id();
            $table->string('covid_tested')->nullable();
            $table->date('when_service_user_tested_date')->nullable();
            $table->string('service_user_covid_test')->nullable();
            $table->string('covid_result')->nullable();
            $table->string('service_user_symptoms')->nullable();
            $table->string('high_temperature')->nullable();
            $table->string('continuous_cough')->nullable();
            $table->string('dry_cough')->nullable();
            $table->string('sense_smell_taste')->nullable();
            $table->string('difficulty_breathing')->nullable();
            $table->string('chest_pain')->nullable();
            $table->string('symptoms_details')->nullable();
            $table->string('vaccination')->nullable();
            $table->date('first_dose')->nullable();
            $table->date('second_dose')->nullable();
            $table->date('third_dose')->nullable();
            $table->date('fourth_dose')->nullable();
            $table->string('family_member_tested')->nullable();
            $table->string('family_member_symptoms')->nullable();
            $table->string('covid_19_9')->nullable();
            $table->integer('patient_id')->nullable();
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
        Schema::dropIfExists('covid_tests');
    }
};
