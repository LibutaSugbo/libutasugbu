<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->integer('Reservation_ID', true);
            $table->dateTime('Reservation_Date');
            $table->integer('Quantity');
            $table->integer('Guest_Adult');
            $table->integer('Guest_Children');
            $table->dateTime('Check_In');
            $table->dateTime('Check_Out');
            $table->integer('Traveler_ID');
            $table->integer('Host_ID')->index('Host_ID');
            $table->integer('R_Accmm_ID')->index('R_Accmm_ID');
            $table->integer('BB_Accmm_ID')->index('BB_Accmm_ID');
            $table->integer('Vehicle_ID')->index('Vehicle_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
