<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("userID")->default(0);  // todo: nullable поменять
            $table->string('userName')->default("");
            $table->string('userPhone')->default("");
            $table->string('userAddress')->default("");
            $table->tinyInteger("status")->default(0);  // 0 - пустая, 1 - оформлен заказ, 2 - в процессе, 3 - получен
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
        Schema::dropIfExists('orders');
    }
}
