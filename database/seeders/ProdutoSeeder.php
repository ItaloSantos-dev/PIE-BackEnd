<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produto')->insert([
            // Artesanato em Madeira
            [
                'nome' => 'Caixa Organizadora de Madeira',
                'descricao' => 'Caixa organizadora artesanal feita em madeira de pinus, com acabamento em verniz. Perfeita para guardar objetos pequenos.',
                'preco' => 45.90,
                'id_categoria' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Porta-Retratos Rústico',
                'descricao' => 'Porta-retratos artesanal em madeira rústica, ideal para fotos 10x15cm. Design único e exclusivo.',
                'preco' => 35.00,
                'id_categoria' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Tábua de Corte Personalizada',
                'descricao' => 'Tábua de corte em madeira maciça, pode ser personalizada com gravação a laser.',
                'preco' => 89.90,
                'id_categoria' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Artesanato em Tecido
            [
                'nome' => 'Almofada Decorativa Bordada',
                'descricao' => 'Almofada decorativa com bordado artesanal em ponto cruz. Capa removível e lavável.',
                'preco' => 55.00,
                'id_categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Bolsa Ecológica de Tecido',
                'descricao' => 'Bolsa ecológica feita com tecido 100% algodão, estampa exclusiva. Resistente e sustentável.',
                'preco' => 42.50,
                'id_categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Jogo Americano em Patchwork',
                'descricao' => 'Conjunto com 4 jogos americanos em patchwork, cores variadas. Produto artesanal único.',
                'preco' => 78.00,
                'id_categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Artesanato em Cerâmica
            [
                'nome' => 'Vaso Decorativo em Cerâmica',
                'descricao' => 'Vaso decorativo feito à mão em cerâmica, com pintura artística. Peça única.',
                'preco' => 68.90,
                'id_categoria' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Conjunto de Canecas Artesanais',
                'descricao' => 'Conjunto com 4 canecas em cerâmica, pintadas à mão. Cada peça é única.',
                'preco' => 95.00,
                'id_categoria' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Prato Decorativo de Parede',
                'descricao' => 'Prato decorativo em cerâmica para parede, com desenhos tradicionais pintados à mão.',
                'preco' => 125.00,
                'id_categoria' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Bijuterias
            [
                'nome' => 'Colar Artesanal com Pedras',
                'descricao' => 'Colar artesanal com pedras naturais e fecho em metal dourado. Design exclusivo.',
                'preco' => 48.00,
                'id_categoria' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Brincos de Crochê',
                'descricao' => 'Par de brincos feitos em crochê com linha de algodão e acabamento em resina.',
                'preco' => 28.50,
                'id_categoria' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Pulseira Macramê',
                'descricao' => 'Pulseira artesanal em macramê com fecho ajustável. Várias cores disponíveis.',
                'preco' => 32.00,
                'id_categoria' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Decoração
            [
                'nome' => 'Luminária de Garrafa',
                'descricao' => 'Luminária artesanal feita com garrafa reciclada e LED. Design moderno e sustentável.',
                'preco' => 85.00,
                'id_categoria' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Mandala Decorativa',
                'descricao' => 'Mandala decorativa em MDF pintada à mão. Várias cores e tamanhos disponíveis.',
                'preco' => 65.00,
                'id_categoria' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Móbile de Origami',
                'descricao' => 'Móbile decorativo com origamis coloridos. Perfeito para quartos infantis.',
                'preco' => 52.00,
                'id_categoria' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Acessórios
            [
                'nome' => 'Necessaire em Tecido',
                'descricao' => 'Necessaire artesanal em tecido impermeável com zíper. Estampas variadas.',
                'preco' => 38.00,
                'id_categoria' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Porta-Celular de Mesa',
                'descricao' => 'Suporte para celular feito em madeira, design minimalista e funcional.',
                'preco' => 29.90,
                'id_categoria' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Chaveiro Personalizado',
                'descricao' => 'Chaveiro artesanal em couro sintético, pode ser personalizado com iniciais.',
                'preco' => 18.50,
                'id_categoria' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
