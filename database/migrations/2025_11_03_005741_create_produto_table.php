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
        Schema::create('produto', function (Blueprint $table) {
            $table->id('id_produto');
            $table->string('nome');
            $table->text('descricao');
            $table->decimal('preco', 8, 2);
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();

            $table->foreign('id_categoria')->references('id_categoria')->on('categorias_produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
