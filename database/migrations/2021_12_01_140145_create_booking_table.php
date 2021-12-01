<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->integer('Booking_ID', true);
            $table->dateTime('Booking_Time');
            $table->integer('Quantity');
            $table->integer('Guest_Adult');
            $table->integer('Guest_Children');
            $table->dateTime('Check_In');
            $table->dateTime('Check_Out');
            $table->integer('Traveler_ID')->index('Traveler_ID');
            $table->integer('Host_ID');
            $table->integer('R_Accmm_ID');
            $table->integer('BB_Accmm_ID');
            $table->integer('Vehicle_ID');

            $table->index(['Host_ID', 'R_Accmm_ID', 'BB_Accmm_ID', 'Vehicle_ID'], 'Host_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
