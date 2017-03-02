<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcolhidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acolhidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto', 50)->nullable();
            $table->string('autos', 50);
            $table->string('ga', 20);
            $table->string('dt_acolhimento', 10);
            $table->string('dt_desacolhimento', 10);
            $table->string('nome', 200);
            $table->string('dt_nascimento', 10);
            $table->string('sexo', 1);
            $table->string('naturalidade', 50);
            $table->string('nacionalidade', 50);
            $table->string('ult_end', 200);
            $table->string('materno', 200);
            $table->string('end_mae', 200);
            $table->string('mae_fone', 14);
            $table->string('fraterno', 200);
            $table->string('end_pai', 200);
            $table->string('pai_fone', 14);
            $table->timestamps();
        });

        Schema::create('acolhido_termo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('termo_id')->unsigned();
            $table->integer('acolhido_id')->unsigned();

            $table->foreign('termo_id')
            ->references('id')
            ->on('termos')
            ->onDelete('cascade');

            $table->foreign('acolhido_id')
            ->references('id')
            ->on('acolhidos')
            ->onDelete('cascade');

        });

        Schema::create('acolhido_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acolhido_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('acolhido_id')
            ->references('id')
            ->on('acolhidos')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        });

         Schema::create('acolhido_statu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acolhido_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->timestamps();

            $table->foreign('acolhido_id')
            ->references('id')
            ->on('acolhidos')
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
        Schema::drop('acolhido_termo');
        Schema::drop('acolhido_user');
        Schema::drop('acolhido_statu');
        Schema::drop('acolhidos');
    }
}
