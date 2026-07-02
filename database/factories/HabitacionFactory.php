<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
    public function definition(): array
    {
        $fechaIni = fake()->dateTimeBetween('-1 year', 'now');
        $fechaFin = fake()->dateTimeBetween($fechaIni, '+6 months');

        return [
            'codigo'    => strtoupper(fake()->unique()->bothify('HAB-###??')),
            'tipo'      => fake()->randomElement([
                'Individual', 'Doble', 'Suite', 'Familiar', 'Penthouse'
            ]),
            'fecha_ini' => $fechaIni->format('Y-m-d'),
            'fecha_fin' => $fechaFin->format('Y-m-d'),
            'hotel_id'  => Hotel::inRandomOrder()->first()->id,
        ];
    }
}