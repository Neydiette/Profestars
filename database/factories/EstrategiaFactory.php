<?php

namespace Database\Factories;

use App\Models\Materia;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estrategia>
 */
class EstrategiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'titulo' => $this->faker->word,
            'profesor_id' => Profesor::inRandomOrder()->first()->id,
            'materia_id' => Materia::inRandomOrder()->first()->id,
            'semestre' => $this->faker->randomElement(['primer semestre', 'segundo semestre', 'tercer semestre', 'cuarto semestre', 'quinto semestre', 'sexto semestre', 'septimo semestre', 'octavo semestre', 'noveno semestre']),
            'estrategia' => $this->faker->paragraph,
            'estado' => $this->faker->randomElement([true, false]),
            'etiquetas' => json_encode(['etiqueta1', 'etiqueta2', 'etiqueta3']),
            'like' => $this->faker->numberBetween(0, 1000),
            'dislike' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
