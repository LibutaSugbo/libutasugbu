<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->integer('Vehicle_ID', true);
            $table->binary('Vehicle_Image');
            $table->string('Vehicle_Type', 50);
            $table->string('Vehicle_With', 50);
            $table->string('Vehicle_Allow', 50);
            $table->double('Vehicle_RentPrice', 10, 2);
            $table->integer('Vehicle_MaxCap');
            $table->integer('Vehicle_Quantity');
            $table->string('Vehicle_Info', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
}
