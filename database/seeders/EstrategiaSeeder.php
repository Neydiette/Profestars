<?php

namespace Database\Seeders;

use App\Models\Estrategia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstrategiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estrategia::factory()->count(30)->create();
    }
}
