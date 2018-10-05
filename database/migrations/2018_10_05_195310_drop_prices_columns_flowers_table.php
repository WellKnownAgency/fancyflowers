<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPricesColumnsFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flowers', function (Blueprint $table) {
            $table->dropColumn('price2');
            $table->dropColumn('price2name');
            $table->dropColumn('price3');
            $table->dropColumn('price3name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flowers', function (Blueprint $table) {
            $table->integer('price2')->after('price1name');
            $table->string('price2name')->after('price2');
            $table->integer('price3')->after('price2name');
            $table->string('price3name')->after('price3');
        });
    }
}
