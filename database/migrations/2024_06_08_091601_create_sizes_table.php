<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->integer("36");
            $table->integer("37");
            $table->integer("38");
            $table->integer("39");
            $table->integer("40");
            $table->integer("41");
            $table->integer("42");
            $table->integer("43");
            $table->integer("44");
            $table->integer("45");
            $table->integer("46");
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
        Schema::dropIfExists('sizes');
    }
}
