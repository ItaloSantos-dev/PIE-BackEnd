<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('categorias_produtos')->insert([
            [
                'nome_categoria' => 'Suplementos Proteicos',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome_categoria' => 'Vitaminas e Minerais',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome_categoria' => 'Pré-Treino',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome_categoria' => 'Acessórios Fitness',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome_categoria' => 'Snacks Saudáveis',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
