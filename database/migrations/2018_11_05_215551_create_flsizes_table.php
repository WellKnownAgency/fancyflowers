<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlsizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flsizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unigue();
            $table->string('display_name');
        });

        // data
        \App\FLSize::create([
            'name' => 'original',
            'display_name' => 'Original',
        ]);

        \App\FLSize::create([
            'name' => 'deluxe',
            'display_name' => 'Deluxe',
        ]);

        \App\FLSize::create([
            'name' => 'grand',
            'display_name' => 'Grand',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flsizes');
    }
}
