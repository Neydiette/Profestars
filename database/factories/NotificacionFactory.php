<?php

namespace Database\Factories;

use App\Models\Estrategia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notificacion>
 */
class NotificacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $estrategia = Estrategia::inRandomOrder()->first();
        return [
            'estrategia' =>  $estrategia->titulo,
            'id_usuario' => $estrategia->user_id,
            'tipo' => $this->faker->numberBetween(1,2)
        ];
    }
}
