<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbAccomodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_accomodation', function (Blueprint $table) {
            $table->integer('BB_Accmm_ID', true);
            $table->binary('BB_Accmm_Image');
            $table->string('BB_Room_Type', 50);
            $table->integer('BB_Quantity');
            $table->double('BB_Price', 10, 2);
            $table->string('BB_Info', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bb_accomodation');
    }
}
