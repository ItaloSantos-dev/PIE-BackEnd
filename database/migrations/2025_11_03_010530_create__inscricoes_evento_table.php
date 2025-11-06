<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_inscricoes_evento', function (Blueprint $table) {
            $table->id('id_inscricao');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_evento');
            $table->dateTime('data_inscricao');
            $table->enum('status_pagamento', ['pendente', 'pago', 'cancelado'])->default('pendente');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_cliente')->references('id_cliente')->on('_cliente')->onDelete('cascade');
            $table->foreign('id_evento')->references('id_evento')->on('_eventos')->onDelete('cascade');

            // Evitar inscrições duplicadas
            $table->unique(['id_cliente', 'id_evento']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_inscricoes_evento');
    }
};
