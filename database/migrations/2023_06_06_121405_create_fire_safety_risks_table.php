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
        Schema::create('fire_safety_risks', function (Blueprint $table) {
            $table->id();
            $table->string('alarms_fitted')->nullable();
            $table->string('alarms_fitted_details')->nullable();
            $table->string('smoke_alarm_fitted')->nullable();
            $table->string('alarms_installed_details')->nullable();
            $table->string('alarms_fire_service')->nullable();
            $table->string('fire_basement')->nullable();
            $table->string('alarms_fire_service_no_details')->nullable();
            $table->string('fire_service_open_door')->nullable();
            $table->string('fire_service_open_door_no_details')->nullable();
            $table->string('risk_assessment_tool')->nullable();
            $table->string('risk_assessment_tool_details')->nullable();
            $table->string('hazard_escape_route')->nullable();
            $table->string('hazard_escape_route_details')->nullable();
            $table->string('contact_details')->nullable();
            $table->string('personal_injury')->nullable();
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
        Schema::dropIfExists('fire_safety_risks');
    }
};
