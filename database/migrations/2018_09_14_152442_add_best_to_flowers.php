<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBestToFlowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('flowers', function($table) {
        $table->boolean('best')->after('stock')->nulable;
        $table->boolean('new')->after('stock')->nulable;
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('flowers', function($table) {
        $table->dropColumn('best');
        $table->dropColumn('new');
      });
    }
}
