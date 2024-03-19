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
        Schema::create('medication_risks', function (Blueprint $table) {
            $table->id();
            $table->string('refusal_medications')->nullable();
            $table->longText('refusal_medications_details')->nullable();
            $table->string('allergies_medications')->nullable();
            $table->longText('allergies_medications_yes_details')->nullable();
            $table->longText('medications_support_details')->nullable();
            $table->longText('insulin_service_details')->nullable();
            $table->longText('blister_medication')->nullable();
            $table->longText('medications_safe_box')->nullable();
            $table->longText('difficulties_medications')->nullable();
            $table->longText('controlled_drug_medications')->nullable();
            $table->longText('medications_changed')->nullable();
            $table->longText('nasal_drop')->nullable();
            $table->longText('timings_medications')->nullable();
            $table->longText('last_medication')->nullable();
            $table->string('risk_level')->nullable();
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
        Schema::dropIfExists('medication_risks');
    }
};
