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
        Schema::create('communications', function (Blueprint $table) {
            $table->id();
            $table->string('language_english')->nullable();
            $table->string('language_punjabi')->nullable();
            $table->string('language_hindi')->nullable();
            $table->string('language_gujarati')->nullable();
            $table->string('other_language')->nullable();
            $table->string('way_communication_verbal')->nullable();
            $table->string('way_communication_non_verbal')->nullable();
            $table->string('way_communication_written')->nullable();
            $table->string('way_communication_british_sign')->nullable();
            $table->string('other_way')->nullable();
            $table->string('communicate_clearly')->nullable();
            $table->text('communicate_clearly_details')->nullable();
            $table->string('speech_impairment')->nullable();
            $table->text('speech_impairment_details')->nullable();
            $table->string('pick_up_phone')->nullable();
            $table->text('pick_up_phone_details')->nullable();
            $table->string('communicate_phone')->nullable();
            $table->text('communicate_phone_details')->nullable();
            $table->string('care_plan_language')->nullable();
            $table->text('care_plan_language_details')->nullable();
            $table->string('care_staff_perform_task')->nullable();
            $table->text('care_staff_perform_task_details')->nullable();
            $table->string('prefer_consent')->nullable();
            $table->string('consent_behalf')->nullable();
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
        Schema::dropIfExists('communications');
    }
};
