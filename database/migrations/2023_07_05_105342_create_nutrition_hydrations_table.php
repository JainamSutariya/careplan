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
        Schema::create('nutrition_hydrations', function (Blueprint $table) {
            $table->id();
            $table->json('maintain_nutrition')->nullable();
            $table->string('support_from')->nullable();
            $table->string('cutlery_able_to')->nullable();
            $table->string('cutlery_Support_with')->nullable();
            $table->string('food_able_to')->nullable();
            $table->string('food_Support_with')->nullable();
            $table->string('fluid_able_to')->nullable();
            $table->string('fluid_Support_with')->nullable();
            $table->string('choice_able_to')->nullable();
            $table->string('choice_Support_with')->nullable();
            $table->string('holding_able_to')->nullable();
            $table->string('holding_Support_with')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('remain_healthy')->nullable();
            $table->string('maximize_my_independence')->nullable();
            $table->string('desire_not_fall')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('malnutrition_dehydration')->nullable();
            $table->string('desire_clean_smart')->nullable();
            $table->string('maintain_healthy_nutritious')->nullable();
            $table->string('avoid_unnecessary_hospital')->nullable();
            $table->string('maintain_good_relation')->nullable();
            $table->string('quality_life_improve')->nullable();
            $table->string('other_outcomes_check_1')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->string('other_outcomes_check_2')->nullable();
            $table->string('other_outcomes_check_3')->nullable();
            $table->string('other_outcomes_check_4')->nullable();
            $table->string('morning_during_visit')->nullable();
            $table->string('lunch_during_visit')->nullable();
            $table->string('tea_during_visit')->nullable();
            $table->string('bed_during_visit')->nullable();
            $table->string('restricted_with')->nullable();
            $table->string('cutlery_use')->nullable();
            $table->string('cutlery_kept')->nullable();
            $table->string('feeding_support')->nullable();
            $table->string('hydration_need')->nullable();
            $table->string('food_fluid_expire')->nullable();
            $table->string('high_suger')->nullable();
            $table->string('position_supporting')->nullable();
            $table->string('dietitian')->nullable();
            $table->string('risk_chocking')->nullable();
            $table->string('salt')->nullable();
            $table->longText('salt_details')->nullable();
            $table->string('refer_salt_team')->nullable();
            $table->longText('referral_details')->nullable();
            $table->string('condition_swallowing')->nullable();
            $table->longText('condition_swallowing_details')->nullable();
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
        Schema::dropIfExists('nutrition_hydrations');
    }
};
