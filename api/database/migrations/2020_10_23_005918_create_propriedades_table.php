<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropriedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriedades', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email_proprietario', 60);
            $table->string('logradouro', 100);
            $table->string('numero', 5)->nullable();
            $table->string('complemento', 60)->nullable();
            $table->string('bairro', 30);
            $table->string('cidade', 60);
            
            // Estado
            $table->integer('id_uf')->unsigned();
            $table->foreign('id_uf')->references('id')->on('uf');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propriedades');
    }
}
