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
            $table->id();

            $table->string('name');
            $table->string('description');

            $table->decimal('price_d', 12, 2);
            $table->string('price_s');

            $table->decimal('weight', 9, 3);
            $table->decimal('height', 9, 3);

            $table->tinyInteger('weight_unit');
            $table->tinyInteger('height_unit');

            $table->tinyInteger('status');

            $table->string('code');

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
