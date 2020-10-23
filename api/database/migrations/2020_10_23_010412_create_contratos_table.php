<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');

            // Propriedade (imóvel)
            $table->integer('id_propriedade')->unsigned();
            $table->foreign('id_propriedade')->references('id')->on('propriedades');

            // Dados do Contratante
            $table->enum('tipo_pessoa', ['Pessoa Física', 'Pessoa Jurídica']);
            $table->string('documento', 14);
            $table->string('email_contratante');
            $table->string('nome_contratante');

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
        Schema::dropIfExists('contratos');
    }
}
