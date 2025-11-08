<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('instrutores')->insert([
            [
                'id_instrutor' => 1,
                'nome' => 'Carlos Silva',
                'especialidade' => 'Treinamento Funcional',
                'email' => 'carlos.silva@exemplo.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_instrutor' => 2,
                'nome' => 'Maria Santos',
                'especialidade' => 'Nutrição e Bem-Estar',
                'email' => 'maria.santos@exemplo.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_instrutor' => 3,
                'nome' => 'João Oliveira',
                'especialidade' => 'Nutrição Esportiva',
                'email' => 'joao.oliveira@exemplo.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
