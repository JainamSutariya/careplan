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
        Schema::create('pressure_ulcer_records', function (Blueprint $table) {
            $table->id();
            $table->string('mark_skin_change_1')->nullable();
            $table->string('mark_skin_change_2')->nullable();
            $table->string('mark_skin_change_3')->nullable();
            $table->string('mark_skin_change_4')->nullable();
            $table->string('mark_skin_change_5')->nullable();
            $table->string('mark_skin_change_6')->nullable();
            $table->string('mark_skin_change_7')->nullable();
            $table->string('mark_skin_change_8')->nullable();
            $table->string('mark_skin_change_9')->nullable();
            $table->string('mark_skin_change_10')->nullable();
            $table->string('mark_skin_change_11')->nullable();
            $table->string('mark_skin_change_12')->nullable();
            $table->string('mark_skin_change_13')->nullable();
            $table->string('mark_skin_change_14')->nullable();
            $table->string('mark_skin_change_15')->nullable();
            $table->string('mark_skin_change_16')->nullable();
            $table->string('mark_skin_change_17')->nullable();
            $table->string('mark_skin_change_18')->nullable();
            $table->string('mark_skin_change_19')->nullable();
            $table->string('mark_skin_change_20')->nullable();
            $table->string('mark_skin_change_21')->nullable();
            $table->string('mark_skin_change_22')->nullable();
            $table->string('mark_skin_change_23')->nullable();
            $table->string('mark_skin_change_24')->nullable();
            $table->string('mark_skin_change_25')->nullable();
            $table->string('mark_skin_change_26')->nullable();
            $table->string('mark_skin_change_27')->nullable();
            $table->string('mark_skin_change_28')->nullable();
            $table->string('mark_skin_change_29')->nullable();
            $table->string('mark_skin_change_30')->nullable();
            $table->string('mark_skin_change_31')->nullable();
            $table->string('mark_skin_change_32')->nullable();
            $table->string('mark_skin_change_33')->nullable();
            $table->string('mark_skin_change_34')->nullable();
            $table->string('mark_skin_change_35')->nullable();
            $table->string('mark_skin_change_36')->nullable();
            $table->json('pressure_sore')->nullable();
            $table->json('location')->nullable();
            $table->json('area')->nullable();
            $table->json('reason')->nullable();
            $table->json('details')->nullable();
            $table->json('name')->nullable();
            $table->json('date')->nullable();
            $table->json('sign')->nullable();
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
        Schema::dropIfExists('pressure_ulcer_records');
    }
};
