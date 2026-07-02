<?php

namespace Database\Seeders;

use App\Models\Agencia;
use App\Models\Habitacion;
use App\Models\Particular;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Orden respetando FK
        $this->call([
            CategoriaSeeder::class,
            HotelSeeder::class,
            HabitacionSeeder::class,
            AgenciaSeeder::class,
            ParticularSeeder::class,
        ]);

        // Tablas pivote — se llenan aquí, sin seeder independiente
        $habitaciones = Habitacion::all();

        Agencia::all()->each(function ($agencia) use ($habitaciones) {
            $agencia->habitaciones()->attach(
                $habitaciones->random(2)->pluck('id'),
                [
                    'fecha_ini' => now()->subDays(rand(10, 60))->format('Y-m-d'),
                    'fecha_fin' => now()->addDays(rand(1, 30))->format('Y-m-d'),
                ]
            );
        });

        Particular::all()->each(function ($particular) use ($habitaciones) {
            $particular->habitaciones()->attach(
                $habitaciones->random(1)->pluck('id'),
                [
                    'fecha_ini' => now()->subDays(rand(5, 40))->format('Y-m-d'),
                    'fecha_fin' => now()->addDays(rand(1, 20))->format('Y-m-d'),
                ]
            );
        });
    }
}