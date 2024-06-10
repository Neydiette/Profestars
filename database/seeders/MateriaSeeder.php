<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materias = [
            ['nombre' => 'Matemáticas'],
            ['nombre' => 'Historia'],
            ['nombre' => 'Biología'],
            ['nombre' => 'Física'],
            ['nombre' => 'Química'],
            ['nombre' => 'Lengua y Literatura'],
            ['nombre' => 'Inglés'],
            ['nombre' => 'Educación Física'],
        ];

        DB::table('materias')->insert($materias);
    }
}
