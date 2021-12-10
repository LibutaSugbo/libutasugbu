<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host', function (Blueprint $table) {
            $table->integer('Host_ID', true);
            $table->string('Host_BName', 300);
            $table->string('Host_LName', 50);
            $table->string('Host_FName', 50);
            $table->string('Host_MName', 50)->nullable();
            $table->string('Host_ExtName', 300)->nullable();
            $table->string('Host_City_Muni', 50);
            $table->string('Host_Brgy', 50);
            $table->string('Host_Street', 50);
            $table->integer('Host_ZIP');
            $table->bigInteger('Host_ContactNum');
            $table->string('Host_Direction', 300);
            $table->string('Host_Email', 50);
            $table->string('Host_Password', 50);
            $table->string('Host_Type', 50);
            $table->string('Host_Website', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('host');
    }
}
