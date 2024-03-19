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
        Schema::create('personal_cares', function (Blueprint $table) {
            $table->id();
            $table->json('care_support_need')->nullable();
            $table->json('while_seated')->nullable();
            $table->string('squeeze_brush_able_to')->nullable();
            $table->string('squeeze_brush_support_with')->nullable();
            $table->string('hold_the_brush_able_to')->nullable();
            $table->string('hold_the_brush_support_with')->nullable();
            $table->string('hold_the_glass_able_to')->nullable();
            $table->string('hold_the_glass_support_with')->nullable();
            $table->string('goto_bathroom_able_to')->nullable();
            $table->string('goto_bathroom_support_with')->nullable();
            $table->string('stand_in_front_able_to')->nullable();
            $table->string('stand_in_front_support_with')->nullable();
            $table->string('seat_on_commode_able_to')->nullable();
            $table->string('seat_on_commode_support_with')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('desire_not_fall')->nullable();
            $table->string('maximize_my_independence')->nullable();
            $table->string('desire_to_oral_health')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('desire_to_avoid_appointment')->nullable();
            $table->string('desire_clean_smart')->nullable();
            $table->string('maintain_healthey_lifestyle')->nullable();
            $table->string('avoid_unnecessary_hospital')->nullable();
            $table->string('maintain_good_relation')->nullable();
            $table->string('improve_quality_life')->nullable();
            $table->string('prevent_malnutrition')->nullable();
            $table->json('other_outcomes_check')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->string('shaving_support')->nullable();
            $table->json('shaving_support_need')->nullable();
            $table->longText('electric_shaver_other_details')->nullable();
            $table->string('shaving_kept_location')->nullable();
            $table->string('complete_shaving')->nullable();
            $table->string('complete_shaving_day_time')->nullable();
            $table->string('nail_cutting_support')->nullable();
            $table->string('hand_nail_cutting_self')->nullable();
            $table->string('hand_nail_cutting_family_support')->nullable();
            $table->string('hand_nail_cutting_professional')->nullable();
            $table->string('foot_nail_cutting_self')->nullable();
            $table->string('foot_nail_cutting_family_support')->nullable();
            $table->string('foot_nail_cutting_professional')->nullable();
            $table->longText('nail_cutting_other_details')->nullable();
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
        Schema::dropIfExists('personal_cares');
    }
};
