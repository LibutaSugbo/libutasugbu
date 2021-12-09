<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristattractionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touristattraction', function (Blueprint $table) {
            $table->integer('TA_ID', true);
            $table->binary('TA_Image');
            $table->string('TA_Activity', 50);
            $table->string('TA_Grouping', 500);
            $table->dateTime('TA_DateAvailable');
            $table->double('TA_Fee', 10, 2);
            $table->string('TA_Info', 5000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('touristattraction');
    }
}
