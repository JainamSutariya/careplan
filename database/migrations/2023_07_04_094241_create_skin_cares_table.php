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
        Schema::create('skin_cares', function (Blueprint $table) {
            $table->id();
            $table->json('skin_integrity')->nullable();
            $table->string('morning')->nullable();
            $table->string('lunch')->nullable();
            $table->string('tea')->nullable();
            $table->string('bed')->nullable();
            $table->string('squeeze_cream_in_my_hand')->nullable();
            $table->string('lower_strength_stand_up_from')->nullable();
            $table->string('lower_strength_able_apply_cream')->nullable();
            $table->string('squeeze_cream_in_right_hand')->nullable();
            $table->string('lower_strength_hold_equipment')->nullable();
            $table->string('open_box_cream_in_left_hand')->nullable();
            $table->string('lower_strength_hold_furniture')->nullable();
            $table->string('lower_strength_able_apply_cream_back')->nullable();
            $table->string('open_box_cream_front_body_part')->nullable();
            $table->string('lower_strength_turn_hold')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('remain_healthy')->nullable();
            $table->string('maximize_my_independence')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('desire_clean_smart')->nullable();
            $table->string('avoid_unnecessary_hospital')->nullable();
            $table->string('desire_not_fall')->nullable();
            $table->string('healthey_lifestyle')->nullable();
            $table->string('maintain_good_relationship')->nullable();
            $table->string('quality_life')->nullable();
            $table->string('other_outcomes_check_1')->nullable();
            $table->string('other_outcomes_check_2')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->string('other_outcomes_check_3')->nullable();
            $table->string('other_outcomes_check_4')->nullable();
            $table->string('support_from')->nullable();
            $table->json('cream_name')->nullable();
            $table->json('location_cream')->nullable();
            $table->string('squeeze_where_apply_cream')->nullable();
            $table->string('open_box_where_apply_cream')->nullable();
            $table->string('reposition_support')->nullable();
            $table->string('additional_thing_1')->nullable();
            $table->string('additional_thing_2')->nullable();
            $table->string('pressure_sore')->nullable();
            $table->string('pressure_sore_grade')->nullable();
            $table->string('maintain_skin_integrity')->nullable();
            $table->string('district_nurse_referral')->nullable();
            $table->date('date_district_nurse_referral')->nullable();
            $table->string('date_district_nurse_referral_check')->nullable();
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
        Schema::dropIfExists('skin_cares');
    }
};
