<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgenciaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codigo'         => strtoupper(fake()->unique()->bothify('AG-####')),
            'nombre'         => fake()->company() . ' Viajes',
            'tfno'           => fake()->numerify('3##-###-####'),
            'direccion'      => fake()->streetAddress(),
            'nombre_persona' => fake()->name(),
        ];
    }
}