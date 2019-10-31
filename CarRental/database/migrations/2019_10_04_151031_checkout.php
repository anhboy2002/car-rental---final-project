<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Checkout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_id');
            $table->integer('user_id_1');
            $table->integer('user_id_2');
            $table->tinyInteger('status_1');
            $table->tinyInteger('status_2');
            $table->tinyInteger('status_ck');
            $table->dateTime('trip_start');
            $table->dateTime('trip_end');
            $table->float('price');
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
        Schema::dropIfExists('checkouts');
    }
}
