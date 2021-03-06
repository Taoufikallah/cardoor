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
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
            $table->string('cover_image');
            $table->integer('brand_id')->unsigned()->index()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands');
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
