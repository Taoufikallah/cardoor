<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('body');
            $table->string('price');
            $table->string('fuel');
            $table->string('year');
            $table->string('color');
            $table->string('fiscal_power');
            $table->string('number_doors');
            $table->string('number_places');
            $table->string('gearbox');
            /* $table->string('image_cover'); */
            /* $table->foreign('brand_id'); */
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
        Schema::dropIfExists('posts');
    }
}