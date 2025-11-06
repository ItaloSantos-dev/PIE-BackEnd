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
        Schema::create('compras_materia_prima', function (Blueprint $table) {
            $table->id('id_compra');
            $table->unsignedBigInteger('id_fornecedor');
            $table->unsignedBigInteger('id_materia');
            $table->date('data_compra');
            $table->integer('quantidade');
            $table->decimal('valor_total', 10, 2);
            $table->timestamps();

            $table->foreign('id_fornecedor')->references('id_fornecedor')->on('_fornecedores')->onDelete('cascade');
            $table->foreign('id_materia')->references('id_materia')->on('materias_primas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras_materia_prima');
    }
};
