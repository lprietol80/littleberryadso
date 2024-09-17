<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),             'descripcion' => fake()->text(),             'precio' => fake()->numberBetween(1000, 500000), 'categoria' => fake()->word(1,50),
            'disponibilidad' => fake()->word() 
        ];
    }
}
