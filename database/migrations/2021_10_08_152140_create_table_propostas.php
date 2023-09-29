<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePropostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_nexus')->nullable();
            $table->string('vendedor')->nullable();
            $table->string('banco')->nullable();
            $table->string('orgao')->nullable();
            $table->string('tabela_digitada')->nullable();
            $table->string('vigencia_tabela')->nullable();
            $table->string('valor_bruto')->nullable();
            $table->string('valor_liquido_liberado')->nullable();
            $table->string('tx_juros')->nullable();
            $table->string('valor_parcela')->nullable();
            $table->string('qtd_parcelas')->nullable();
            $table->string('documentos')->nullable();
            $table->timestamps();
            
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes');


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
        Schema::dropIfExists('table_propostas');
    }
}
