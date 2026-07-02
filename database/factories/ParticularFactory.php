<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParticularFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codigo'    => strtoupper(fake()->unique()->bothify('PAR-####')),
            'nombre'    => fake()->name(),
            'direccion' => fake()->streetAddress(),
            'tfno'      => fake()->numerify('3##-###-####'),
        ];
    }
}