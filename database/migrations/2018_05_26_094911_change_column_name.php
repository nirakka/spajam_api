<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_schedules', function (Blueprint $table) {
            //
            $table->renameColumn('when', 'start_time')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_schedules', function (Blueprint $table) {
            //
            $table->renameColumn('start_time', 'when')->change();
        });
    }
}
