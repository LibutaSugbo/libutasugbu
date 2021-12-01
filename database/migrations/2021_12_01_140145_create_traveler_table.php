<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traveler', function (Blueprint $table) {
            $table->integer('Traveler_ID', true);
            $table->string('Traveler_LName', 50);
            $table->string('Traveler_FName', 50);
            $table->date('Traveler_BirthDate');
            $table->bigInteger('Traveler_Contact');
            $table->string('Traveler_Email', 50);
            $table->string('Traveler_Address', 500);
            $table->string('Login_Name', 50);
            $table->string('Password', 50);
            $table->integer('User_Acc_ID')->index('User_Acc_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traveler');
    }
}
