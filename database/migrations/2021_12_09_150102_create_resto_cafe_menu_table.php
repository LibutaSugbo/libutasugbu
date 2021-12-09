<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoCafeMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resto_cafe_menu', function (Blueprint $table) {
            $table->integer('RC_ID', true);
            $table->binary('RC_Image');
            $table->string('RC_Type', 50);
            $table->string('RC_Name', 50);
            $table->string('RC_Description', 5000);
            $table->double('RC_Price', 10, 2);
            $table->string('RC_Info', 5000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resto_cafe_menu');
    }
}
