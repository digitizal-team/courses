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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('level_id');
            $table->integer('city_id');
            $table->string('name');
            $table->string('start_date');
            $table->string('end_date');
            $table->integer('price');
            $table->integer('duration');
            $table->string('time');
            $table->string('class_size_min');
            $table->string('class_size_max');
            $table->string('reference_material');
            $table->string('training_computer');
            $table->string('CPD_hour');
            $table->string('delivery');
            $table->integer('status');
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
        Schema::dropIfExists('courses');
    }
};
