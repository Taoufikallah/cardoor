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
            $table->string('pickup_date');
            $table->string('return_date');
            $table->string('pickup_time');
            $table->string('return_time');
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
