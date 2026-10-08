<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Ambiente::create([
            'nome' => 'nome do ambiente',
            'descricao' => 'descricao sobre o ambiente',
            'status' => 'status sobre o ambiente',
        ]);

        Sensor::create([
            'codigo' => 'codigo so sensor',
            'tipo' => 'tipo do ambiente',
            'descricao' => 'decricao do ambiente',
            'status' => 'status do ambiente',
        ]);
    }
}
