<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->increments('id');
            $table->char('fam_natural',1);
            $table->char('fam_vinculo', 1);
            $table->char('dados_fam', 1);
            $table->char('imp_jud', 1);
            $table->char('orfandade', 1);
            $table->char('tram_processo', 1);
            $table->char('dest_familiar', 1);
            $table->string('outra_situa', 200);
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
        Schema::drop('familias');
    }
}
