<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResortaccomodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resortaccomodation', function (Blueprint $table) {
            $table->integer('R_Accmm_ID', true);
            $table->integer('R_Accmm_Image');
            $table->binary('R_Accmm_Type');
            $table->double('R_Accmm_Price', 8, 2);
            $table->string('R_Accmm_Info', 500);
            $table->string('R_Room_Type', 500)->nullable();
            $table->integer('R_Room_Quantity')->nullable();
            $table->integer('R_Room_MaxCap')->nullable();
            $table->integer('R_Cot_Quantity')->nullable();
            $table->integer('R_Cot_Max')->nullable();
            $table->integer('R_Tab_Quantity')->nullable();
            $table->integer('R_Tab_MaxCap')->nullable();
            $table->string('R_Act_Type', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resortaccomodation');
    }
}
