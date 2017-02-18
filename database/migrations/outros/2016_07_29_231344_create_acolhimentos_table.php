<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcolhimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acolhimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enc_por', 200);
            $table->text('mot_acol');
            $table->text('abordagem');
            $table->text('condicoes');
            $table->string('instituicao', 100);
            $table->date('dt_entrada');
            $table->date('dt_saida');
            $table->text('mot_acol_ant');
            $table->text('mot_dacol_ant');
            $table->text('enc_familia');
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
        Schema::drop('acolhimentos');
    }
}
