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
        Schema::create('dressing_supports', function (Blueprint $table) {
            $table->id();
            $table->json('change_cloth')->nullable();
            $table->string('dressing_while')->nullable();
            $table->string('while_seated')->nullable();
            $table->json('upper_body_strength')->nullable();
            $table->string('upper_body_strength_other_text')->nullable();
            $table->string('stand_up_strength')->nullable();
            $table->json('lower_body_strength')->nullable();
            $table->longText('lower_body_strength_other_text')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('remain_healthy')->nullable();
            $table->string('maximize_my_independence')->nullable();
            $table->string('desire_not_fall')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('healthey_lifestyle')->nullable();
            $table->string('desire_clean_smart')->nullable();
            $table->string('maintain_good_relationship')->nullable();
            $table->string('avoid_unnecessary_hospital')->nullable();
            $table->string('quality_life')->nullable();
            $table->string('other_outcomes_check_1')->nullable();
            $table->string('other_outcomes_check_2')->nullable();
            $table->string('other_outcomes_check_3')->nullable();
            $table->string('other_outcomes_check_4')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->string('support_from')->nullable();
            $table->string('morning_wear_clothes')->nullable();
            $table->string('morning_wear_clothes_other_text')->nullable();
            $table->string('evening_wear_clothes')->nullable();
            $table->string('evening_wear_clothes_other_text')->nullable();
            $table->text('other_details')->nullable();
            $table->string('seated_in_bedroom')->nullable();
            $table->string('seated_in_bathroom')->nullable();
            $table->string('seated_in_kitchen')->nullable();
            $table->string('seated_in_living_room')->nullable();
            $table->string('seated_on_chair')->nullable();
            $table->string('seated_on_bed')->nullable();
            $table->string('seated_on_commode')->nullable();
            $table->string('seated_on_other')->nullable();
            $table->string('wardrobe_location')->nullable();
            $table->string('wardrobe_location_other_text')->nullable();
            $table->string('clothes_kept')->nullable();
            $table->string('clothes_kept_other_text')->nullable();
            $table->string('dirty_clothes')->nullable();
            $table->string('dirty_clothes_other_text')->nullable();
            $table->string('additional_thing_1')->nullable();
            $table->string('additional_thing_2')->nullable();
            $table->string('additional_thing_3')->nullable();
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
        Schema::dropIfExists('dressing_supports');
    }
};
