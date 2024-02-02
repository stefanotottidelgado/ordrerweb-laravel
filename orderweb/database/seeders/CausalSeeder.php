<?php

namespace Database\Seeders;

use App\Models\Causal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CausalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Causal::insert([
            ['description' => 'Reparación contador'],
            ['description' => 'Suspensión del servicio'],
            ['description' => 'Instalación de contador'],
            ['description' => 'Cambio de contador'],
        ]);
    }
}
