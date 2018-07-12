<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('usuclas', function (Blueprint $table) {
            $table->increments('id-usuclas');
            $table->integer('id-user')->unsigned();
            $table->integer('id-clase')->unsigned();
            $table->foreign('id-user')->references('id-user')->on('users');
            $table->foreign('id-clase')->references('id-clase')->on('clases');
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
        Schema::dropIfExists('usuclas');
    }
}
