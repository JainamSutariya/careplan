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
        Schema::create('continence_cares', function (Blueprint $table) {
            $table->id();
            $table->string('using_toilet')->nullable();
            $table->string('using_the_commode')->nullable();
            $table->string('changing_incontinence')->nullable();
            $table->string('hold_the_bed_rails')->nullable();
            $table->string('stand_up_from_the_bed')->nullable();
            $table->string('lift_both_legs')->nullable();
            $table->string('go_to_bathroom')->nullable();
            $table->string('use_the_commode')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('skin_remain_health')->nullable();
            $table->string('maximize_independence')->nullable();
            $table->string('desire_not_have_fall')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('desire_avoid_unnecessary')->nullable();
            $table->string('clean_smart_looking')->nullable();
            $table->string('maintain_healthey_lifestyle')->nullable();
            $table->string('unnecessary_hospital_admission')->nullable();
            $table->string('maintain_good_relationship')->nullable();
            $table->string('improve_quality_life')->nullable();
            $table->string('malnutrition_dehydration')->nullable();
            $table->string('other_outcomes_check_1')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->string('other_outcomes_check_2')->nullable();
            $table->string('other_outcomes_check_3')->nullable();
            $table->string('other_outcomes_check_4')->nullable();
            $table->string('desired_outcomes')->nullable();
            $table->text('desired_outcomes_other_text')->nullable();
            $table->string('location_incontinence_pad')->nullable();
            $table->string('check_soiled_morning')->nullable();
            $table->string('check_soiled_lunch')->nullable();
            $table->string('check_soiled_tea')->nullable();
            $table->string('check_soiled_bed')->nullable();
            $table->text('commode_text')->nullable();
            $table->string('commode_morning')->nullable();
            $table->string('commode_lunch')->nullable();
            $table->string('commode_tea')->nullable();
            $table->string('commode_bed')->nullable();
            $table->text('toilet_morning')->nullable();
            $table->text('toilet_lunch')->nullable();
            $table->text('toilet_tea')->nullable();
            $table->text('toilet_bed')->nullable();
            $table->text('leg_bag_text')->nullable();
            $table->text('frequency_change_text')->nullable();
            $table->text('every_day_text')->nullable();
            $table->string('remove_night_beg')->nullable();
            $table->string('empty_leg_bag_lunch')->nullable();
            $table->string('empty_leg_bag_tea')->nullable();
            $table->string('empty_leg_bag_bed')->nullable();
            $table->string('family_size')->nullable();
            $table->text('family_size_other')->nullable();
            $table->string('incontinence_pads')->nullable();
            $table->text('incontinence_pads_other')->nullable();
            $table->text('refuse_bag')->nullable();
            $table->text('dispose_pads')->nullable();
            $table->string('ordering_catheter_bags')->nullable();
            $table->text('ordering_catheter_bags_other')->nullable();
            $table->string('prefer_care_staff')->nullable();
            $table->string('prefer_care_monitor_check')->nullable();
            $table->string('prefer_care_monitor')->nullable();
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
        Schema::dropIfExists('continence_cares');
    }
};
