<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTravelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('traveler', function (Blueprint $table) {
            $table->foreign(['User_Acc_ID'], 'traveler_ibfk_1')->references(['User_Acc_ID'])->on('useraccount')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('traveler', function (Blueprint $table) {
            $table->dropForeign('traveler_ibfk_1');
        });
    }
}
