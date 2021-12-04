<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBucketlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bucketlist', function (Blueprint $table) {
            $table->integer('Bucketlist_ID', true);
            $table->mediumText('Host_Info');
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
        Schema::dropIfExists('bucketlist');
    }
}
