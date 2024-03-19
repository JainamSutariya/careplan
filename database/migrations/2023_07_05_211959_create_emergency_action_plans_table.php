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
        Schema::create('emergency_action_plans', function (Blueprint $table) {
            $table->id();
            $table->string('personal_care_emergency')->nullable();
            $table->string('dietary_emergency')->nullable();
            $table->string('medication_emergency')->nullable();
            $table->string('transfer_emergency')->nullable();
            $table->string('bed_position_emergency')->nullable();
            $table->string('shopping_emergency')->nullable();
            $table->string('banking_emergency')->nullable();
            $table->string('accident_emergency')->nullable();
            $table->longText('other_info_details')->nullable();
            $table->string('sevice_user_name')->nullable();
            $table->string('signature')->nullable();
            $table->date('date')->nullable();
            $table->longText('reason')->nullable();
            $table->longText('representative_name')->nullable();
            $table->longText('relationship_with_user')->nullable();
            $table->longText('representative_signature')->nullable();
            $table->date('representative_date')->nullable();
            $table->string('gaining_name')->nullable();
            $table->string('gaining_signature')->nullable();
            $table->date('gaining_date')->nullable();
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
        Schema::dropIfExists('emergency_action_plans');
    }
};
