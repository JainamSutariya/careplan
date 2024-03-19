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
        Schema::create('my_information', function (Blueprint $table) {
            $table->id();
            $table->string('prefer_call_name')->nullable();
            $table->string('prefer_language')->nullable();
            $table->string('living_situation')->nullable();
            $table->string('details_of_property')->nullable();
            $table->string('property_belongs')->nullable();
            $table->string('bedroom_location')->nullable();
            $table->string('property_access')->nullable();
            $table->string('lifeline_available')->nullable();
            $table->string('hearing_aid')->nullable();
            $table->string('preferred_side_communicate')->nullable();
            $table->string('wear_glasses')->nullable();
            $table->string('specify_reason')->nullable();
            $table->string('strong_side')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('end_of_life_care')->nullable();
            $table->string('adrt')->nullable();
            $table->longText('adrt_exact_location')->nullable();
            $table->string('dnacpr')->nullable();
            $table->longText('dnacpr_exact_location')->nullable();
            $table->string('respect_place')->nullable();
            $table->longText('respect_exact_location')->nullable();
            $table->string('pets_property')->nullable();
            $table->longText('pets_property_yes_details')->nullable();
            $table->string('smoke_alarm')->nullable();
            $table->string('funding')->nullable();
            $table->longText('people_present_meeting')->nullable();
            $table->longText('voice_of_family')->nullable();
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
        Schema::dropIfExists('my_information');
    }
};
