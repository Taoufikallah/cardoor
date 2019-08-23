<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->index()->nullable();
            $table->foreign('post_id')->references('id')->on('reserves');
            $table->integer('post_id')->unsigned()->index()->nullable();
            $table->foreign('client_id')->references('id')->on('reserves');

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('adress');
            $table->string('city');
            $table->string('age');
            $table->string('license');
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
        Schema::dropIfExists('reserves');
    }
}
