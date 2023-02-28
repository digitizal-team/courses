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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->integer('city_id');
            $table->integer('date');
            $table->string('bill_contact');
            $table->string('seats');
            $table->integer('total_price');
            $table->integer('user_info');
            $table->string('bill_email');
            $table->string('bill_phone');
            $table->string('bill_fname');
            $table->string('bill_lname');
            $table->string('bill_address_one');
            $table->string('bill_address_two');
            $table->string('bill_city');
            $table->string('bill_state');
            $table->string('bill_zipcode');
            $table->string('company_name');
            $table->string('employee_position');
            $table->string('purchase_order');

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
        Schema::dropIfExists('bookings');
    }
};
