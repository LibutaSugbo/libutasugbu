<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('host', function (Blueprint $table) {
            $table->foreign(['User_Acc_ID'], 'host_ibfk_1')->references(['User_Acc_ID'])->on('useraccount')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('host', function (Blueprint $table) {
            $table->dropForeign('host_ibfk_1');
        });
    }
}
