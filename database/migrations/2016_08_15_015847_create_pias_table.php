<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mae', 200);
            $table->string('end_mae', 200);
            $table->string('fone_mae', 14);
            $table->string('pai', 200);
            $table->string('end_pai', 200);
            $table->string('fone_pai', 14);
            $table->string('guia_numero', 30);
            $table->string('guia_emite', 150);
            $table->string('cert_numero', 30);
            $table->string('cert_folha', 30);
            $table->string('cert_livro', 20);
            $table->string('cert_carto', 50);
            $table->string('vacina_numero', 30);
            $table->string('rg', 20);
            $table->string('cpf', 14);
            $table->string('encaminhado_por', 150);
            $table->text('mot_enca');
            $table->text('abordagem');
            $table->text('condicao');
            $table->string('instituicao_at', 150);
            $table->string('dt_entrada_at', 10);
            $table->string('dt_saida_at', 10);
            $table->string('mot_acol_at', 200);
            $table->string('mot_desacol_at', 200);
            $table->string('enc_at', 200);
            $table->string('vinculo_familiar', 200);
            $table->string('situacao_familiar', 200);
            $table->string('nome_arranjo', 200);
            $table->string('idade_arranjo', 200);
            $table->string('paratenco_arranjo', 200);
            $table->string('prof_arranjo', 200);
            $table->string('religiao_aranjo', 200);
            $table->string('guarda', 1);
            $table->string('desc_guarda', 100);
            $table->string('familia_reside', 100);
            $table->string('municipi_familia', 50);
            $table->string('prog_social', 100);
            $table->string('bolsa_beneficio', 100);
            $table->string('rpvm_beneficio', 100);
            $table->string('outro_beneficio', 100);
            $table->string('prog_atendimento', 100);
            $table->string('prog_atendimento_tipo', 100);
            $table->string('prog_atendimento_espec', 100);
            $table->string('pensao_alimenticia', 100);
            $table->string('pensao_aliment_espec', 100);
            $table->string('situacao_moradia', 100);
            $table->string('tipo_moradia', 100);
            $table->string('lixo_moradia', 100);
            $table->string('iluminacao_moradia', 100);
            $table->string('esgoto_moradia', 100);
            $table->string('agua_moradia', 100);
            $table->string('relacao_familiar', 100);
            $table->string('percepcao_familiar', 100);
            $table->string('percepcao_crianca', 100);
            $table->string('percepcao_tecnica', 100);
            $table->timestamps();
        });

        Schema::create('pia_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pia_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('pia_id')
            ->references('id')
            ->on('pias')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        });

        Schema::create('acolhido_pia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pia_id')->unsigned();
            $table->integer('acolhido_id')->unsigned();

            $table->foreign('pia_id')
            ->references('id')
            ->on('pias')
            ->onDelete('cascade');

            $table->foreign('acolhido_id')
            ->references('id')
            ->on('acolhidos')
            ->onDelete('cascade');

        });

        Schema::create('pia_anexo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pia_id')->unsigned();
            $table->integer('acolhido_id')->unsigned();
            $table->text('local');
            $table->timestamps();

            $table->foreign('pia_id')
            ->references('id')
            ->on('pias')
            ->onDelete('cascade');

            $table->foreign('acolhido_id')
            ->references('id')
            ->on('acolhidos')
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
        Schema::drop('pia_user');
        Schema::drop('pia_acolhido');
        Schema::drop('pia_anexo');
        Schema::drop('pias');
    }
}
