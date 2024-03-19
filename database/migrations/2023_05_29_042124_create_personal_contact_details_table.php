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
        Schema::create('personal_contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('citizen_name')->nullable();
            $table->string('preferred_to_call')->nullable();
            $table->longText('address')->nullable();
            $table->date('dob')->nullable();
            $table->string('current_gender')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('sex_assigned_birth')->nullable();
            $table->string('language_know')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile')->nullable();
            $table->string('general_practitioner')->nullable();
            $table->string('pharmacy_details')->nullable();
            $table->string('contact1_name')->nullable();
            $table->string('contact2_name')->nullable();
            $table->string('contact1_relationship_citizen')->nullable();
            $table->string('contact2_relationship_citizen')->nullable();
            $table->string('contact1_address')->nullable();
            $table->string('contact2_address')->nullable();
            $table->string('contact1_contact_number')->nullable();
            $table->string('contact2_contact_number')->nullable();
            $table->string('contact1_email')->nullable();
            $table->string('contact2_email')->nullable();
            $table->string('contact1_contact_day_or_night')->nullable();
            $table->string('contact2_contact_day_or_night')->nullable();
            $table->string('social_name')->nullable();
            $table->string('social_contact')->nullable();
            $table->string('social_email')->nullable();
            $table->string('district_nurse')->nullable();
            $table->string('person_care_first_id')->nullable();
            $table->string('nhs_no')->nullable();
            $table->date('care_service_start_date')->nullable();
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
        Schema::dropIfExists('personal_contact_details');
    }
};
