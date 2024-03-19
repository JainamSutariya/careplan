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
        Schema::create('my_preferred_call_supports', function (Blueprint $table) {
            $table->id();
            $table->string('morning_call_text')->nullable();
            $table->string('morning_call_requested')->nullable();
            $table->string('morning_call_duration')->nullable();
            $table->string('morning_call_carers')->nullable();
            $table->string('morning_call_personal_care')->nullable();
            $table->string('morning_call_transfer')->nullable();
            $table->string('morning_call_food')->nullable();
            $table->string('morning_call_stoma_care')->nullable();
            $table->string('morning_call_medication')->nullable();
            $table->string('morning_call_change_bed')->nullable();
            $table->string('lunch_call_text')->nullable();
            $table->string('lunch_call_request_time')->nullable();
            $table->string('lunch_call_duration')->nullable();
            $table->string('lunch_call_carers')->nullable();
            $table->string('lunch_call_personal_care')->nullable();
            $table->string('lunch_call_transfer')->nullable();
            $table->string('lunch_call_food')->nullable();
            $table->string('lunch_call_stoma_care')->nullable();
            $table->string('lunch_call_medication')->nullable();
            $table->string('lunch_call_change_bed')->nullable();
            $table->string('tea_call_text')->nullable();
            $table->string('tea_call_requested')->nullable();
            $table->string('tea_call_duration')->nullable();
            $table->string('tea_carers_text')->nullable();
            $table->string('tea_call_personal_care')->nullable();
            $table->string('tea_call_transfer')->nullable();
            $table->string('tea_call_food')->nullable();
            $table->string('tea_call_stoma')->nullable();
            $table->string('tea_medication')->nullable();
            $table->string('tea_change_bed_text')->nullable();
            $table->string('tuck_call_text')->nullable();
            $table->string('tuck_call_requested_time')->nullable();
            $table->string('tuck_call_duration_text')->nullable();
            $table->string('tuck_call_carers_text')->nullable();
            $table->string('tuck_call_personal_care_carer')->nullable();
            $table->string('tuck_call_transfer_carer')->nullable();
            $table->string('tuck_call_food_carer')->nullable();
            $table->string('tuck_call_stoma_care_carer')->nullable();
            $table->string('tuck_call_medication_carer')->nullable();
            $table->string('tuck_call_change_carer')->nullable();
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
        Schema::dropIfExists('my_preferred_call_supports');
    }
};
