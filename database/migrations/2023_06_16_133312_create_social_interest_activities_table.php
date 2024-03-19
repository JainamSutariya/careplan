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
        Schema::create('social_interest_activities', function (Blueprint $table) {
            $table->id();
            $table->longText('care_support_need')->nullable();
            $table->longText('desired_outcomes')->nullable();
            $table->longText('support_desired_outcomes')->nullable();
            $table->string('preferred_care')->nullable();
            $table->longText('professional_visit')->nullable();
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
        Schema::dropIfExists('social_interest_activities');
    }
};
