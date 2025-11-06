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
        Schema::create('_eventos', function (Blueprint $table) {
            $table->id('id_evento');
            $table->string('nome');
            $table->text('descricao');
            $table->enum('tipo_evento', ['feira', 'exposicao', 'workshop', 'lancamento', 'palestra', 'outro'])->default('outro');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->string('local');
            $table->integer('capacidade_maxima')->default(0);
            $table->integer('vagas_disponiveis')->default(0);
            $table->decimal('valor_inscricao', 10, 2)->default(0.00);
            $table->enum('status', ['planejado', 'confirmado', 'em_andamento', 'concluido', 'cancelado'])->default('planejado');
            $table->unsignedBigInteger('id_instrutor')->nullable();
            $table->string('imagem')->nullable();
            $table->timestamps();

            // Foreign key
            $table->foreign('id_instrutor')->references('id_instrutor')->on('instrutores')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_eventos');
    }
};
