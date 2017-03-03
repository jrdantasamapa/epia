<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArranjoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranjos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('idade');
            $table->string('parentesco');
            $table->string('profissao');
            $table->string('religiao');
            $table->integer('acolhido_id');
            $table->integer('user_id');
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
        Schema::drop('arranjo');
    }
}
