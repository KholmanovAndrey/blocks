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
            $table->string('title')->comment('Название');
            $table->string('name')->comment('Транслит');
            $table->string('size')->comment('Размер, мм');
            $table->string('gost')->comment('ГОСТ');
            $table->string('weight')->comment('Масса, кг');
            $table->string('endurance')->comment('Марка прочности, кг/см2');
            $table->string('frost')->comment('Морозостойкость, циклов');
            $table->string('thermal')->comment('Теплопроводность, Вт/м °С');
            $table->string('density')->comment('Класс средней плотности');
            $table->string('pallet')->comment('Кол-во штук в поддоне');
            $table->string('square')->comment('Кол-во штук в 1м2 (со швом/без шва)');
            $table->string('cube')->comment('Кол-во штук в 1м3 (со швом/без шва)');
            $table->string('packaging')->comment('Упаковка');
            $table->string('soundproofing')->nullable(true)->comment('Звукоизоляция');
            $table->string('image')->comment('Картинка');
            $table->boolean('isDeleted')->default(false);

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
