<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
{
    Schema::create('_fornecedores', function (Blueprint $table) {
        $table->id('id_fornecedor'); // AQUI ESTÁ O PONTO-CHAVE
        $table->string('nome');
        $table->string('contato')->nullable();
        $table->string('telefone')->nullable();
        $table->string('email')->unique()->nullable();
        $table->timestamps();
    });
}

    public function down(): void {
        Schema::dropIfExists('fornecedores');
    }
};
