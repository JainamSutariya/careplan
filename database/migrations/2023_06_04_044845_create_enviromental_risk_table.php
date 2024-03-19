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
        Schema::create('enviromental_risk', function (Blueprint $table) {
            $table->id();
            $table->string('level_access')->nullable();
            $table->string('well_lit')->nullable();
            $table->string('parking_close')->nullable();
            $table->string('clear_access')->nullable();
            $table->string('ground_floor')->nullable();
            $table->string('flooring_safe')->nullable();
            $table->string('tripping_hazards')->nullable();
            $table->string('environment_free')->nullable();
            $table->string('food_preparation')->nullable();
            $table->string('working_condition')->nullable();
            $table->string('toileting_facilities')->nullable();
            $table->string('personal_hygiene')->nullable();
            $table->string('control_measures')->nullable();
            $table->string('behaviour_member')->nullable();
            $table->string('user_problem')->nullable();
            $table->string('smoker_household')->nullable();
            $table->string('history_violence')->nullable();
            $table->string('safeguarding')->nullable();
            $table->string('summon_assistance')->nullable();
            $table->longText('details_hazards')->nullable();
            $table->longText('taken_immediately')->nullable();
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
        Schema::dropIfExists('enviromental_risk');
    }
};
