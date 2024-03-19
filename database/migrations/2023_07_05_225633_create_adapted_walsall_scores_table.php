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
        Schema::create('adapted_walsall_scores', function (Blueprint $table) {
            $table->id();
            $table->date('risk_date')->nullable();
            $table->time('risk_time')->nullable();
            $table->json('no_deficit')->nullable();
            $table->json('deficit')->nullable();
            $table->json('walk_independently')->nullable();
            $table->json('walk_assistance')->nullable();
            $table->json('unable_walk')->nullable();
            $table->json('skin_condition')->nullable();
            $table->json('skin_change')->nullable();
            $table->json('pressure_ulcer')->nullable();
            $table->json('verbal')->nullable();
            $table->json('no_dietary')->nullable();
            $table->json('dietary')->nullable();
            $table->json('none')->nullable();
            $table->json('occasional')->nullable();
            $table->json('frequent')->nullable();
            $table->json('bowel_none')->nullable();
            $table->json('bowel_occasional')->nullable();
            $table->json('bowel_frequent')->nullable();
            $table->json('care_no_carer')->nullable();
            $table->json('care_active_carer')->nullable();
            $table->json('care_intermittent_carer')->nullable();
            $table->json('zero_three_score')->nullable();
            $table->json('four_nine_score')->nullable();
            $table->json('ten_fourteen_score')->nullable();
            $table->json('fifteen_above_score')->nullable();
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
        Schema::dropIfExists('adapted_walsall_scores');
    }
};
