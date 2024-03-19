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
        Schema::create('falls_risks', function (Blueprint $table) {
            $table->id();
            $table->integer('mental_state')->nullable();
            $table->integer('gait_balance')->nullable();
            $table->integer('medical_condition')->nullable();
            $table->integer('sensory_deficit')->nullable();
            $table->integer('fall_history')->nullable();
            $table->integer('nutrition')->nullable();
            $table->integer('pain_movement')->nullable();
            $table->json('elimination')->nullable();
            $table->integer('medication_factor')->nullable();
            $table->integer('mobility')->nullable();
            $table->integer('clothing_footwear')->nullable();
            $table->integer('home')->nullable();
            $table->integer('home_environment')->nullable();
            $table->string('mitigate_risk')->nullable();
            $table->string('referral_made_ot')->nullable();
            $table->date('referral_made_ot_date')->nullable();
            $table->string('referral_made_physio')->nullable();
            $table->date('referral_made_physio_date')->nullable();
            $table->string('referral_made_gp')->nullable();
            $table->date('referral_made_gp_date')->nullable();
            $table->string('referral_made_salt')->nullable();
            $table->date('referral_made_salt_date')->nullable();
            $table->date('risk_rating_date')->nullable();
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
        Schema::dropIfExists('falls_risks');
    }
};
