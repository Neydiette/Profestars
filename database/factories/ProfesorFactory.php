<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->randomElement(['Ing.', 'MTI', 'Lic.', 'Dr.']),
            'nombre_completo' => $this->faker->name,
            'correo' => $this->faker->unique()->safeEmail,
            'nivel' => $this->faker->numberBetween(1, 10),
            'rango' => $this->faker->numberBetween(1, 10),
            'copas' => $this->faker->numberBetween(0, 100),
            'frase' => $this->faker->sentence,
            'semestres' => $this->faker->randomElements([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 3),
            'dificultad' => $this->faker->numberBetween(1, 4),
            'reprobacion' => $this->faker->numberBetween(50, 100),
            'paciencia' => $this->faker->numberBetween(50, 100),
            'caracter' => $this->faker->numberBetween(50, 100),
            'horarios' => $this->faker->randomElements(['Lunes de 8:00 am a 10:00 am', 'Martes de 6:00 pm a 8:00 pm', 'Miércoles de 10:00 am a 12:00 pm'], 2),
            'skills' => $this->faker->randomElements(['Programación', 'Matemáticas', 'Física', 'Inglés'], 2),
            'clases' => $this->faker->randomElements(['Matemáticas I', 'Programación II', 'Física III', 'Inglés IV'], 3),
        ];
    }
}
