<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'nome' => 'Carlos Andrade',
                'especialidade' => 'Musculação',
                'email' => 'carlos.andrade@academia.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Fernanda Lima',
                'especialidade' => 'Pilates',
                'email' => 'fernanda.lima@academia.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Ricardo Souza',
                'especialidade' => 'CrossFit',
                'email' => 'ricardo.souza@academia.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
