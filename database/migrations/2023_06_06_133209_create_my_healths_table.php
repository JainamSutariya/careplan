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
        Schema::create('my_healths', function (Blueprint $table) {
            $table->id();
            $table->longText('my_health_details')->nullable();
            $table->longText('mobility')->nullable();
            $table->longText('personal_care')->nullable();
            $table->longText('dressing_support')->nullable();
            $table->longText('skin_care')->nullable();
            $table->longText('continence_care')->nullable();
            $table->longText('nutrition_and_hydration')->nullable();
            $table->longText('medication')->nullable();
            $table->longText('social_interest')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('maximize_my_independence')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('desire_clean_smart')->nullable();
            $table->string('avoid_unnecessary_hospital')->nullable();
            $table->string('improve_quality_life')->nullable();
            $table->string('maintain_healthy_diet')->nullable();
            $table->string('prevent_malnutrition')->nullable();
            $table->json('other_outcomes_check')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->longText('desired_outcome_details')->nullable();
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
        Schema::dropIfExists('my_healths');
    }
};
