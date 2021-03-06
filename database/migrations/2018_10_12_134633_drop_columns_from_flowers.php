<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnsFromFlowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('flowers', function($table) {
               $table->dropColumn(['image2','image3','image4','image5','price1name']);
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
          $table->string('image2');
          $table->string('image3');
          $table->string('image4');
          $table->string('image5');
          $table->string('price1name');
      });
}
}
