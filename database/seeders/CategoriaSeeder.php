<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias_produtos')->insert([
            [
                'id_categoria' => 1,
                'nome_categoria' => 'Artesanato em Madeira',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_categoria' => 2,
                'nome_categoria' => 'Artesanato em Tecido',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_categoria' => 3,
                'nome_categoria' => 'Artesanato em Cerâmica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_categoria' => 4,
                'nome_categoria' => 'Bijuterias',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_categoria' => 5,
                'nome_categoria' => 'Decoração',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_categoria' => 6,
                'nome_categoria' => 'Acessórios',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
