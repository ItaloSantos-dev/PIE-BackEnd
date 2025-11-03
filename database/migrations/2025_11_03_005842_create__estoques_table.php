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
        Schema::create('_estoques', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produto')->primary();
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('id_produto')->references('id_produto')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_estoques');
    }
};
