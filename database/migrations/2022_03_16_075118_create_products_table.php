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
            $table->string('img')->unique();
            $table->string('img_sec')->unique();
            $table->string('good_price');
            $table->string('discount');
            $table->string('link_avito')->unique();
            $table->string('link_yula')->unique();
            $table->string('description');
            $table->string('price');
            $table->integer('sold');
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
