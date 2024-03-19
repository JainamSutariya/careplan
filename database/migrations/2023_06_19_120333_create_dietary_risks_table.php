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
        Schema::create('dietary_risks', function (Blueprint $table) {
            $table->id();
            $table->string('allergy_food')->nullable();
            $table->longText('allergy_food_details')->nullable();
            $table->string('dietary_restriction')->nullable();
            $table->longText('dietary_restriction_details')->nullable();
            $table->string('encouragement_food')->nullable();
            $table->longText('encouragement_food_details')->nullable();
            $table->string('encouragement_fluids')->nullable();
            $table->longText('encouragement_fluids_details')->nullable();
            $table->string('food_preparation')->nullable();
            $table->string('fluids_preparation')->nullable();
            $table->string('difficulties_chewing')->nullable();
            $table->longText('difficulties_chewing_details')->nullable();
            $table->string('difficulties_swallowing')->nullable();
            $table->longText('difficulties_swallowing_details')->nullable();
            $table->string('difficulties_swallowing_fluid')->nullable();
            $table->longText('difficulties_swallowing_fluid_details')->nullable();
            $table->longText('sore_mouth_details')->nullable();
            $table->string('chocking_risk')->nullable();
            $table->string('drugs_alcohol')->nullable();
            $table->string('risk_level')->nullable();
            $table->longText('dietary_Information')->nullable();
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
        Schema::dropIfExists('dietary_risks');
    }
};
