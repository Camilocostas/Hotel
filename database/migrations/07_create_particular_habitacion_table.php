<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('particular_habitacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('particular_id')
                ->constrained('particulares')
                ->cascadeOnDelete();
            $table->foreignId('habitacion_id')
                ->constrained('habitaciones')
                ->cascadeOnDelete();
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('particular_habitacion');
    }
};
