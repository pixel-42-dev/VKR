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
            $table->string("name");
            $table->string("code");  // Код товара
            $table->text("description")->nullable();
            $table->integer("bucketID")->nullable();
            $table->integer("sizeID")->nullable();
            $table->integer("categoryID")->nullable();
            $table->integer("BrandID")->nullable();
            $table->text("image1")->nullable();
            $table->text("image2")->nullable();
            $table->text("image3")->nullable();
            $table->double("price")->default(0);
            // $table->integer('status')->default(0); // 0 - в наличии, 1 - в корзине, 2 - в заказе, 3 - получен
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
