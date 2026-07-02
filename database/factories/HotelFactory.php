<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre'       => fake()->company() . ' Hotel',
            'direccion'    => fake()->streetAddress(),
            'tfno'         => fake()->numerify('3##-###-####'),
            'anio'         => fake()->year(),
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
        ];
    }
}