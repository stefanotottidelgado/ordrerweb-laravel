<?php

namespace Database\Seeders;

use App\Models\TypeActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeActivity::insert([
            ['description' => 'Reparación'],
            ['description' => 'contrucción'],
            ['description' => 'Instalación'],
            ['description' => 'Suspensión'],
            ['description' => 'Otros'],
        ]);
    }
}
