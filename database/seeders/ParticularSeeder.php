<?php

namespace Database\Seeders;

use App\Models\Particular;
use Illuminate\Database\Seeder;

class ParticularSeeder extends Seeder
{
    public function run(): void
    {
        Particular::factory(8)->create();
    }
}