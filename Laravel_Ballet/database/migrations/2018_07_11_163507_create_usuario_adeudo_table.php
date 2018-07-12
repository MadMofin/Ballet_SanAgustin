<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioAdeudoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('usuades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id-user')->unsigned();
            $table->foreign('id-user')->references('id-user')->on('users');
            $table->integer('adeudo');
            $table->date('fecha');
            $table->boolean('pagado');
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
        Schema::dropIfExists('usuades');
    }
}
