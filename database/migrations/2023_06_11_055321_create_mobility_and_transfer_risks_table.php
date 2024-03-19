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
        Schema::create('mobility_and_transfer_risks', function (Blueprint $table) {
            $table->id();
            $table->string('inside_independent')->nullable();
            $table->string('inside_super_visad')->nullable();
            $table->string('inside_carer_1')->nullable();
            $table->string('inside_carer_2')->nullable();
            $table->string('inside_equipment')->nullable();
            $table->string('inside_fear')->nullable();
            $table->string('inside_pain')->nullable();
            $table->string('outside_independent')->nullable();
            $table->string('outside_super_visad')->nullable();
            $table->string('outside_carer_1')->nullable();
            $table->string('outside_carer_2')->nullable();
            $table->string('outside_equipment')->nullable();
            $table->string('outside_fear')->nullable();
            $table->string('outside_pain')->nullable();
            $table->string('outside_risk')->nullable();
            $table->string('out_bed_independent')->nullable();
            $table->string('out_bed_super_visad')->nullable();
            $table->string('out_bed_carer_1')->nullable();
            $table->string('out_bed_carer_2')->nullable();
            $table->string('out_bed_equipment')->nullable();
            $table->string('out_bed_fear')->nullable();
            $table->string('out_bed_pain')->nullable();
            $table->string('out_bed_risk')->nullable();
            $table->string('inside_risk')->nullable();
            $table->string('moving_independent')->nullable();
            $table->string('moving_super_visad')->nullable();
            $table->string('moving_carer_1')->nullable();
            $table->string('moving_carer_2')->nullable();
            $table->string('moving_equipment')->nullable();
            $table->string('moving_fear')->nullable();
            $table->string('moving_pain')->nullable();
            $table->string('moving_risk')->nullable();
            $table->string('toilet_independent')->nullable();
            $table->string('toilet_super_visad')->nullable();
            $table->string('toilet_carer_1')->nullable();
            $table->string('toilet_carer_2')->nullable();
            $table->string('toilet_equipment')->nullable();
            $table->string('toilet_fear')->nullable();
            $table->string('toilet_pain')->nullable();
            $table->string('toilet_risk')->nullable();
            $table->string('transfer_independent')->nullable();
            $table->string('transfer_super_visad')->nullable();
            $table->string('transfer_carer_1')->nullable();
            $table->string('transfer_carer_2')->nullable();
            $table->string('transfer_equipment')->nullable();
            $table->string('transfer_fear')->nullable();
            $table->string('transfer_pain')->nullable();
            $table->string('transfer_risk')->nullable();
            $table->string('stand_independent')->nullable();
            $table->string('stand_super_visad')->nullable();
            $table->string('stand_carer_1')->nullable();
            $table->string('stand_carer_2')->nullable();
            $table->string('stand_equipment')->nullable();
            $table->string('stand_fear')->nullable();
            $table->string('stand_pain')->nullable();
            $table->string('stand_risk')->nullable();
            $table->string('bathing_independent')->nullable();
            $table->string('bathing_super_visad')->nullable();
            $table->string('bathing_carer_1')->nullable();
            $table->string('bathing_carer_2')->nullable();
            $table->string('bathing_equipment')->nullable();
            $table->string('bathing_fear')->nullable();
            $table->string('bathing_pain')->nullable();
            $table->string('bathing_risk')->nullable();
            $table->string('stair_independent')->nullable();
            $table->string('stair_super_visad')->nullable();
            $table->string('stair_carer_1')->nullable();
            $table->string('stair_carer_2')->nullable();
            $table->string('stair_equipment')->nullable();
            $table->string('stair_fear')->nullable();
            $table->string('stair_pain')->nullable();
            $table->string('stair_risk')->nullable();
            $table->string('emergency_independent')->nullable();
            $table->string('emergency_super_visad')->nullable();
            $table->string('emergency_carer_1')->nullable();
            $table->string('emergency_carer_2')->nullable();
            $table->string('emergency_equipment')->nullable();
            $table->string('emergency_fear')->nullable();
            $table->string('emergency_pain')->nullable();
            $table->string('emergency_risk')->nullable();
            $table->longText('physical_problem')->nullable();
            $table->longText('communication')->nullable();
            $table->longText('behaviour')->nullable();
            $table->longText('safe_transfer_details')->nullable();
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
        Schema::dropIfExists('mobility_and_transfer_risks');
    }
};
