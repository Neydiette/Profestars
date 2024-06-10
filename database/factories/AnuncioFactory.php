<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Profesor;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anuncio>
 */
class AnuncioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'titulo' => $this->faker->sentence,
            'profesor_id' => Profesor::inRandomOrder()->first()->id,
            'semestre' => $this->faker->randomElement(['Primavera', 'Otoño', 'Invierno', 'Verano']),
            'anuncio' => $this->faker->paragraph,
            'imagen_path' => null, 
            'prioridad' => $this->faker->randomElement(['Util', 'Urgente', 'Importante']), 
        ];
    }
}
