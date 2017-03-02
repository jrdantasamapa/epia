<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('local', 200);
            $table->string('tipo', 100);
            $table->string('status', 1);
            $table->timestamps();
        });
        
        Schema::create('anexo_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anexo_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('anexo_id')
            ->references('id')
            ->on('anexos')
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
        Schema::drop('anexo_user');
        Schema::drop('anexos');
    }
}
