<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   public function up(): void
    {
        Schema::create('instrutores', function (Blueprint $table) {
            $table->id('id_instrutor');
            $table->string('nome');
            $table->string('especialidade');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('instrutores');
    }
};
