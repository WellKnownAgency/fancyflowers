<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReconfigureCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->dropColumn('percnt_off');
            $table->dropColumn('type');

        });

        Schema::table('coupons', function (Blueprint $table) {
            $table->enum('type', ['fixed', 'percent'])->after('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->integer('percnt_off')->after('value');
            $table->dropColumn('type');
        });

        Schema::table('coupons', function (Blueprint $table) {
            $table->integer('type')->after('code');
        });
    }
}
