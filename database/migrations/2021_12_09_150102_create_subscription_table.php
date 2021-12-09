<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription', function (Blueprint $table) {
            $table->integer('Sub_ID', true);
            $table->double('Sub_Payment', 10, 2);
            $table->dateTime('Sub_StartDate');
            $table->dateTime('Sub_EndDate');
            $table->string('Sub_Email', 50);
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
        Schema::dropIfExists('subscription');
    }
}
