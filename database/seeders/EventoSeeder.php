<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_eventos')->insert([
            [
                'nome' => 'Workshop de Treinamento Funcional',
                'descricao' => 'Um evento voltado para profissionais de educação física com foco em técnicas avançadas de treinamento funcional.',
                'tipo_evento' => 'workshop',
                'data_inicio' => '2025-12-05 09:00:00',
                'data_fim' => '2025-12-05 17:00:00',
                'local' => 'Academia Corpo em Movimento - São Paulo',
                'capacidade_maxima' => 50,
                'vagas_disponiveis' => 20,
                'valor_inscricao' => 150.00,
                'status' => 'confirmado',
                'id_instrutor' => 1,
                'imagem' => 'workshop_funcional.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Feira de Saúde e Bem-Estar',
                'descricao' => 'Evento aberto ao público com palestras, demonstrações e expositores sobre hábitos saudáveis e qualidade de vida.',
                'tipo_evento' => 'feira',
                'data_inicio' => '2025-11-20 10:00:00',
                'data_fim' => '2025-11-22 18:00:00',
                'local' => 'Centro de Convenções Anhembi - São Paulo',
                'capacidade_maxima' => 500,
                'vagas_disponiveis' => 350,
                'valor_inscricao' => 0.00,
                'status' => 'em_andamento',
                'id_instrutor' => 2,
                'imagem' => 'feira_saude.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Palestra sobre Nutrição Esportiva',
                'descricao' => 'Palestra ministrada por nutricionistas renomados sobre estratégias alimentares para performance esportiva.',
                'tipo_evento' => 'palestra',
                'data_inicio' => '2026-01-10 19:00:00',
                'data_fim' => '2026-01-10 21:00:00',
                'local' => 'Auditório Central - Rio de Janeiro',
                'capacidade_maxima' => 120,
                'vagas_disponiveis' => 80,
                'valor_inscricao' => 75.00,
                'status' => 'planejado',
                'id_instrutor' => 3,
                'imagem' => 'palestra_nutricao.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
