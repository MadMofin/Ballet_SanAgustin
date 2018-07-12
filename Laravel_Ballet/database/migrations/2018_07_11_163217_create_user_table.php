<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id-user');
            $table->date('birthday');
            $table->string('nombre-user', 30);
            $table->string('appat-user', 30);
            $table->string('apmat-user', 30);
            $table->integer('id-tutor')->unsigned();
            $table->foreign('id-tutor')->references('id-tutor')->on('tutors');
            $table->integer('pago');
             $table->integer('id-administrador')->unsigned();
            $table->foreign('id-administrador')->references('id-administrador')->on('admins');
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
        Schema::dropIfExists('users');
    }
}
