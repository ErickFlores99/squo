<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User; // <--- Importas el modelo aquí

use Illuminate\Support\Facades\Hash; // <--- Hasheo de contraseñas

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Usuario Admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@squo.com',
            'password' => Hash::make('admin'), // Contraseña: admin,
            'role' => 'a',
        ]);

        // Usuario Test
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@asquo.com',
            'password' => Hash::make('test'), // Contraseña: test,
            'role' => 't',
        ]);

        // Usuario
        User::factory()->create([
            'name' => 'Usuario',
            'email' => 'user@asquo.com',
            'password' => Hash::make('user'), // Contraseña: test,
            'role' => 'u',
        ]);
    }
}
