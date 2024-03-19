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
        Schema::create('allergies', function (Blueprint $table) {
            $table->id();
            $table->string('general_allergies')->nullable();
            $table->string('general_allergies_yes_details')->nullable();
            $table->string('medication_allergies')->nullable();
            $table->string('medication_allergies_yes_details')->nullable();
            $table->string('fluid_allergies')->nullable();
            $table->string('fluid_allergies_yes_details')->nullable();
            $table->string('mental_capacity_decision')->nullable();
            $table->string('legal_attorney')->nullable();
            $table->string('lpa_reference_number')->nullable();
            $table->string('dols_details')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('closing_door')->nullable();
            $table->string('maintaining_choice')->nullable();
            $table->string('location_towel_kept')->nullable();
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
        Schema::dropIfExists('allergies');
    }
};
