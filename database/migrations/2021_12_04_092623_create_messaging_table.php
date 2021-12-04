<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messaging', function (Blueprint $table) {
            $table->integer('Message_ID', true);
            $table->string('Message_Sender', 500);
            $table->string('Message_Recipient', 500);
            $table->mediumText('Message_Content');
            $table->dateTime('Message_TimeStamp');
            $table->integer('Traveler_ID')->index('Traveler_ID');
            $table->integer('Host_ID')->index('Host_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messaging');
    }
}
