<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
{
    Schema::create('_vendas', function (Blueprint $table) {
        $table->id('id_venda'); // AQUI ESTÁ O PONTO-CHAVE
        $table->unsignedBigInteger('id_cliente');
        $table->date('data_venda');
        $table->decimal('valor_total', 10, 2);
        $table->timestamps();

        $table->foreign('id_cliente')->references('id_cliente')->on('_cliente');
    });
}

    public function down(): void {
        Schema::dropIfExists('vendas');
    }
};