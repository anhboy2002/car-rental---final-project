<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Car extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('car_category_id');
            $table->string('num_seat');
            $table->string('year');
            $table->string('name');
            $table->string('plate_number');
            $table->text('description');
            $table->float('rate');
            $table->string('total_trip');
            $table->float('price');
            $table->string('fuel_type');
            $table->string('movement');
            $table->float('lat');
            $table->float('long');
            $table->string('location_name');
            $table->tinyInteger('status');
            $table->date('date_available_begin');
            $table->string('featured');
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
        Schema::dropIfExists('cars');
    }
}
