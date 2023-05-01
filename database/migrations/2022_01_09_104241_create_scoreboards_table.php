<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoreboards', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->unsigned();
            $table->text('s_one');
            $table->text('s_two');
            $table->text('s_three');
            $table->text('s_four');
            $table->text('s_five');
            $table->text('s_six');
            $table->string('img');
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
        Schema::dropIfExists('scoreboards');
    }
}
