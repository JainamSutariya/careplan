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
        Schema::create('mobilities', function (Blueprint $table) {
            $table->id();
            $table->string('transfer_place')->nullable();
            $table->string('strength')->nullable();
            $table->longText('can_hold_details')->nullable();
            $table->string('maintain_health_condition')->nullable();
            $table->string('remain_healthy')->nullable();
            $table->string('maximize_my_independence')->nullable();
            $table->string('desire_not_fall')->nullable();
            $table->string('maintain_dignity_privacy')->nullable();
            $table->string('malnutrition')->nullable();
            $table->string('desire_clean_smart')->nullable();
            $table->string('maintain_good_relationship')->nullable();
            $table->string('avoid_unnecessary_hospital')->nullable();
            $table->string('maintain_healthey_lifestyle')->nullable();
            $table->string('improve_quality_life')->nullable();
            $table->string('maintain_healthy_diet')->nullable();
            $table->json('other_outcomes_check')->nullable();
            $table->json('other_outcomes_text')->nullable();
            $table->json('equipment_place')->nullable();
            $table->json('other_equipment')->nullable();
            $table->string('size_small_sheet')->nullable();
            $table->string('hoist_place')->nullable();
            $table->string('hoist_delivered')->nullable();
            $table->string('hoist_make')->nullable();
            $table->string('hoist_last_service')->nullable();
            $table->string('sling_place')->nullable();
            $table->string('size_sling')->nullable();
            $table->string('lunch_transfer')->nullable();
            $table->string('tea_transfer')->nullable();
            $table->string('bed_transfer')->nullable();
            $table->string('reposition_support')->nullable();
            $table->string('lunch_reposition')->nullable();
            $table->string('tea_reposition')->nullable();
            $table->string('bed_reposition')->nullable();
            $table->string('care_staff_consent')->nullable();
            $table->string('professional_involved')->nullable();
            $table->string('nurse_frequency')->nullable();
            $table->string('ot_frequency')->nullable();
            $table->string('physio_frequency')->nullable();
            $table->string('professional_referral')->nullable();
            $table->string('gp_reason')->nullable();
            $table->string('gp_referral')->nullable();
            $table->string('spa_reason')->nullable();
            $table->string('spa_referral')->nullable();
            $table->string('physio_reason')->nullable();
            $table->string('physio_referral')->nullable();
            $table->string('ot_reason')->nullable();
            $table->string('ot_referral')->nullable();
            $table->longText('other_information')->nullable();
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
        Schema::dropIfExists('mobilities');
    }
};
