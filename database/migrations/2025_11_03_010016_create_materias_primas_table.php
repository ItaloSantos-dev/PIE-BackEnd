<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
 public function up(): void
{
    Schema::create('materias_primas', function (Blueprint $table) {
        // A linha mais importante é esta:
        $table->id('id_materia'); 

        $table->string('nome');
        $table->text('descricao')->nullable();
        $table->timestamps();
    });
}
    public function down(): void {
        Schema::dropIfExists('materias_primas');
    }
};