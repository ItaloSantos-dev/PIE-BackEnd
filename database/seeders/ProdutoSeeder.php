<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('produto')->insert([
            // Categoria 1: Suplementos Proteicos
            [
                'nome' => 'Whey Protein Concentrado',
                'descricao' => 'Suplemento proteico para ganho de massa muscular.',
                'preco' => 159.90,
                'id_categoria' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome' => 'Caseína',
                'descricao' => 'Proteína de absorção lenta, ideal para a noite.',
                'preco' => 179.90,
                'id_categoria' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Categoria 2: Vitaminas e Minerais
            [
                'nome' => 'Multivitamínico Daily',
                'descricao' => 'Conjunto de vitaminas e minerais para suplementação diária.',
                'preco' => 49.90,
                'id_categoria' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome' => 'Vitamina D3 1000UI',
                'descricao' => 'Auxilia na absorção de cálcio e manutenção óssea.',
                'preco' => 39.90,
                'id_categoria' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Categoria 3: Pré-Treino
            [
                'nome' => 'Pré-Treino Energy',
                'descricao' => 'Aumenta foco, energia e performance nos treinos.',
                'preco' => 89.90,
                'id_categoria' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome' => 'Creatina Monohidratada',
                'descricao' => 'Auxilia no aumento de força e explosão muscular.',
                'preco' => 69.90,
                'id_categoria' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Categoria 4: Acessórios Fitness
            [
                'nome' => 'Mochila de Academia',
                'descricao' => 'Mochila resistente para transportar itens de treino.',
                'preco' => 129.90,
                'id_categoria' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome' => 'Corda de Pular',
                'descricao' => 'Ideal para exercícios cardiovasculares e condicionamento.',
                'preco' => 29.90,
                'id_categoria' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Categoria 5: Snacks Saudáveis
            [
                'nome' => 'Barrinha de Proteína',
                'descricao' => 'Snack proteico prático para qualquer hora do dia.',
                'preco' => 9.90,
                'id_categoria' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome' => 'Amêndoas Torradas',
                'descricao' => 'Snack saudável e rico em gorduras boas.',
                'preco' => 24.90,
                'id_categoria' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
