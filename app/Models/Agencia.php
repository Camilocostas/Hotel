<?php

namespace App\Models;

use App\Traits\HasQueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory, HasQueryScopes;

    protected $fillable = ['codigo', 'nombre', 'tfno', 'direccion', 'nombre_persona'];

    protected $allowIncluded = ['habitaciones', 'habitaciones.hotel'];
    protected $allowFilter   = ['id', 'codigo', 'nombre'];
    protected $allowSort     = ['id', 'codigo', 'nombre'];

    public function habitaciones()
    {
        return $this->belongsToMany(Habitacion::class, 'agencia_habitacion')
                    ->withPivot('fecha_ini', 'fecha_fin')
                    ->withTimestamps();
    }
}