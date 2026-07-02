<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'descripcion' => fake()->randomElement([
                'Una estrella',
                'Dos estrellas',
                'Tres estrellas',
                'Cuatro estrellas',
                'Cinco estrellas',
            ]),
            'iva' => fake()->randomElement([0.00, 5.00, 10.00, 19.00]),
        ];
    }
}