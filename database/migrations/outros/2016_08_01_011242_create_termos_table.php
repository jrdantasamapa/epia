<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero', 20);
            $table->text('content');
            $table->string('dt_inicio',10);
            $table->string('dt_final', 10);
            $table->string('dt_assinatura', 10);
            $table->timestamps();
        });

        Schema::create('termo_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('termo_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('termo_id')
            ->references('id')
            ->on('termos')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        });
        Schema::create('padrinho_termo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('termo_id')->unsigned();
            $table->integer('padrinho_id')->unsigned();

            $table->foreign('termo_id')
            ->references('id')
            ->on('termos')
            ->onDelete('cascade');

            $table->foreign('padrinho_id')
            ->references('id')
            ->on('padrinhos')
            ->onDelete('cascade');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('termo_user');
        Schema::drop('padrinho_termo');
        Schema::drop('termos');
    }
}
