<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowerFlsizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower_flsize', function (Blueprint $table) {
            $table->integer('flower_id')->unsigned();
            $table->integer('flsize_id')->unsigned();
            $table->decimal('price', 8, 2)->unsigned()->default(0.00);

            $table->foreign('flower_id')->references('id')->on('flowers')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('flsize_id')->references('id')->on('flsizes')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['flower_id', 'flsize_id']);
        });

        $flowers = \App\Flower::all();
        $sizes = \App\FLSize::all();

        $flowers->each(function ($item, $key) use ($sizes) {
            $item->sizes()->sync($sizes);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flower_flsize');
    }
}
