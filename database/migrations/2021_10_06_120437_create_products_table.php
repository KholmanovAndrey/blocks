<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('title');
            $table->text('description');
            $table->string('size');
            $table->float('weight');
            $table->string('endurance');
            $table->string('frost_resistance');
            $table->float('thermal_conductivity');
            $table->float('density');
            $table->integer('pallet');
            $table->string('square');
            $table->string('cube');
            $table->string('packaging');

            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->string('meta_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
