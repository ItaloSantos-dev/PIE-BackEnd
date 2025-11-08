<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verifica se já existe um usuário admin
        $adminExists = User::where('email', 'admin@pie.com')->exists();

        if (!$adminExists) {
            User::create([
                'name' => 'Administrador',
                'email' => 'admin@pie.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'is_active' => true,
            ]);

            $this->command->info('Usuário admin criado com sucesso!');
            $this->command->info('Email: admin@pie.com');
            $this->command->info('Senha: admin123');
        } else {
            $this->command->info('Usuário admin já existe!');
        }

        // Cria um usuário normal para testes
        $userExists = User::where('email', 'user@pie.com')->exists();

        if (!$userExists) {
            User::create([
                'name' => 'Usuário Teste',
                'email' => 'user@pie.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
                'is_active' => true,
            ]);

            $this->command->info('Usuário normal criado com sucesso!');
            $this->command->info('Email: user@pie.com');
            $this->command->info('Senha: user123');
        } else {
            $this->command->info('Usuário normal já existe!');
        }
    }
}
