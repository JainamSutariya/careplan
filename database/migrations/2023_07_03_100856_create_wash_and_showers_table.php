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
        Schema::create('wash_and_showers', function (Blueprint $table) {
            $table->id();
            $table->string('support_care_need')->nullable();
            $table->string('support_care_need_days')->nullable();
            $table->string('take_wash_while')->nullable();
            $table->string('while_seated')->nullable();
            $table->string('hair_wash')->nullable();
            $table->string('wash_hair_while')->nullable();
            $table->string('strength')->nullable();
            $table->string('sit_unattended')->nullable();
            $table->string('wash')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('remain_healthy')->nullable();
            $table->string('maximize_my_independence')->nullable();
            $table->string('desire_not_fall')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('quality_life')->nullable();
            $table->string('desire_clean_smart')->nullable();
            $table->string('maintain_good_relationship')->nullable();
            $table->string('avoid_unnecessary_hospital')->nullable();
            $table->string('maintain_healthey_lifestyle')->nullable();
            $table->string('other_outcomes_check_1')->nullable();
            $table->string('other_outcomes_check_2')->nullable();
            $table->string('other_outcomes_check_3')->nullable();
            $table->string('other_outcomes_check_4')->nullable();
            $table->string('other_outcomes_check_5')->nullable();
            $table->string('other_outcomes_check_6')->nullable();
            $table->string('other_outcomes_check_7')->nullable();
            $table->string('other_outcomes_check_8')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->string('support_from')->nullable();
            $table->longText('shower_gel')->nullable();
            $table->longText('shampoo')->nullable();
            $table->longText('washing_bowl')->nullable();
            $table->longText('towel')->nullable();
            $table->longText('upper_body')->nullable();
            $table->longText('lower_body')->nullable();
            $table->longText('location')->nullable();
            $table->string('type_strip_wash')->nullable();
            $table->string('strength_upper_body')->nullable();
            $table->string('part_face')->nullable();
            $table->string('able_to_wash_face')->nullable();
            $table->string('support_from_carer_face')->nullable();
            $table->string('front_body_part')->nullable();
            $table->string('able_to_wash_front_body')->nullable();
            $table->string('support_from_carer_front_body')->nullable();
            $table->string('type_bed_wash')->nullable();
            $table->string('part_hand')->nullable();
            $table->string('able_to_wash_hand')->nullable();
            $table->string('support_from_carer_hand')->nullable();
            $table->string('strength_lower_body')->nullable();
            $table->string('part_back')->nullable();
            $table->string('able_to_wash_back')->nullable();
            $table->string('support_from_carer_back')->nullable();
            $table->string('type_drying_shower')->nullable();
            $table->string('part_buttock')->nullable();
            $table->string('able_to_wash_buttock')->nullable();
            $table->string('support_from_carer_buttock')->nullable();
            $table->string('type_drying_body')->nullable();
            $table->string('part_lag')->nullable();
            $table->string('able_to_wash_lag')->nullable();
            $table->string('support_from_carer_lag')->nullable();
            $table->string('bathroom_location')->nullable();
            $table->string('able_take_wash')->nullable();
            $table->string('additional_thing_1')->nullable();
            $table->string('additional_thing_2')->nullable();
            $table->string('additional_thing_3')->nullable();
            $table->string('additional_thing_4')->nullable();
            $table->string('additional_thing_5')->nullable();
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
        Schema::dropIfExists('wash_and_showers');
    }
};
