<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosacolhidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dadosacolhidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto', 50);
            $table->string('autos', 50);
            $table->integer('ga');
            $table->date('dt_acolhimento');
            $table->date('dt_desacolhimento');
            $table->string('nome', 200);
            $table->date('dt_nascimento');
            $table->char('sexo', 1);
            $table->string('naturalidade', 50);
            $table->string('nacionalidade', 50);
            $table->string('mae', 200);
            $table->string('end_mae', 200);
            $table->integer('fone_mae');
            $table->string('pai', 200);
            $table->string('end_pai', 200);
            $table->integer('fone_pai');
            $table->char('guia_acolhimento', 1);
            $table->integer('cn_n');
            $table->integer('cn_folha');
            $table->integer('cn_livro');
            $table->string('cn_cartorio', 100);
            $table->integer('rg');
            $table->integer('cpf');
            $table->char('cart_vacinacao',1);
            $table->char('enc_ctutelar',1);
            $table->char('rel_ctutelar',1);
            $table->string('outros_doc', 100);
            $table->char('não_doc', 1);
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
        Schema::drop('dadosacolhidos');
    }
}
