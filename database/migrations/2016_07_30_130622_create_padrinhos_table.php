<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padrinhos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('autoridade', 150);
            $table->string('nprocesso', 20);
            $table->string('dt_processo', 10);
            $table->string('nome', 200);
            $table->string('endereco', 250);
            $table->string('numero', 10);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->string('rg', 20);
            $table->string('cpf', 14);
            $table->string('fone', 14);
            $table->string('celular', 15);
            $table->string('profissao', 100);
            $table->timestamps();
        });

        Schema::create('padrinho_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('padrinho_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('padrinho_id')
            ->references('id')
            ->on('padrinhos')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::drop('padrinho_user');
        Schema::drop('padrinhos');
    }
}
