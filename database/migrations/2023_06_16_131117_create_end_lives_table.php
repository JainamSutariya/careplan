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
        Schema::create('end_lives', function (Blueprint $table) {
            $table->id();
            $table->longText('care_support_need')->nullable();
            $table->longText('desired_outcomes')->nullable();
            $table->longText('achieve_desired')->nullable();
            $table->string('communication_expressing')->nullable();
            $table->longText('communication_expressing_details')->nullable();
            $table->string('topics_communication_avoid')->nullable();
            $table->longText('topics_communication_avoid_details')->nullable();
            $table->string('opted_organ_donation')->nullable();
            $table->longText('opted_organ_donation_details')->nullable();
            $table->string('care_plan_gp_pain')->nullable();
            $table->longText('care_plan_gp_pain_kept_details')->nullable();
            $table->string('treatments_approaching')->nullable();
            $table->longText('treatments_approaching_additional_details')->nullable();
            $table->longText('important_life_hours_details')->nullable();
            $table->longText('wishes_final_days')->nullable();
            $table->longText('service_user_present_days_hours')->nullable();
            $table->longText('comfort_final_days_hours')->nullable();
            $table->string('cultural_beliefs_considered')->nullable();;
            $table->longText('cultural_beliefs_considered_details')->nullable();
            $table->longText('wishes_user_funeral')->nullable();
            $table->string('funeral_director_place')->nullable();
            $table->longText('funeral_director_place_details')->nullable();
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
        Schema::dropIfExists('end_lives');
    }
};
