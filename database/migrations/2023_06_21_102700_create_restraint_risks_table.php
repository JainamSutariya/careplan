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
        Schema::create('restraint_risks', function (Blueprint $table) {
            $table->id();
            $table->string('keysafe_place')->nullable();
            $table->string('consent_safety')->nullable();
            $table->longText('consent_safety_no_details')->nullable();
            $table->string('bedrails_place')->nullable();
            $table->string('consent_bedrails')->nullable();
            $table->longText('consent_bedrails_details')->nullable();
            $table->string('safety_belt')->nullable();
            $table->longText('car_seat_belt')->nullable();
            $table->string('consent_car_seat_belt')->nullable();
            $table->longText('consent_car_seat_belt_details')->nullable();
            $table->string('mobile_hoist')->nullable();
            $table->string('mobile_hoist_transfer')->nullable();
            $table->longText('mobile_hoist_transfer_no_details')->nullable();
            $table->string('medication_lock_safe')->nullable();
            $table->string('consent_overdose_medication_lock_safe')->nullable();
            $table->longText('consent_overdose_medication_lock_safe_details')->nullable();
            $table->string('restraint_place')->nullable();
            $table->longText('including_consent_details')->nullable();
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
        Schema::dropIfExists('restraint_risks');
    }
};
