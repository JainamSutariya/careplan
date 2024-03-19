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
        Schema::create('extra_needs', function (Blueprint $table) {
            $table->id();
            $table->longText('shopping_details');
            $table->string('shopping_support');
            $table->string('weekly_shopping_limit');
            $table->string('who_shopping_pay');
            $table->string('shopping_receipt');
            $table->longText('laundry_details');
            $table->string('laundry_support');
            $table->string('washing_machine_location');
            $table->string('laundry_outside');
            $table->string('closest_location_laundry');
            $table->string('pay_laundry');
            $table->string('laundry_receipt');
            $table->longText('cleaning_details');
            $table->string('cleaning_support');
            $table->longText('other_details');
            $table->longText('banking_support_details');
            $table->string('banking_support');
            $table->longText('information_details_office');
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
        Schema::dropIfExists('extra_needs');
    }
};
