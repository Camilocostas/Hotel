<?php

namespace App\Models;

use App\Traits\HasQueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    use HasFactory, HasQueryScopes;

    protected $table = 'particulares';

    protected $fillable = ['codigo', 'nombre', 'direccion', 'tfno'];

    protected $allowIncluded = ['habitaciones', 'habitaciones.hotel'];
    protected $allowFilter   = ['id', 'codigo', 'nombre'];
    protected $allowSort     = ['id', 'codigo', 'nombre'];

    public function habitaciones()
    {
        return $this->belongsToMany(Habitacion::class, 'particular_habitacion')
                    ->withPivot('fecha_ini', 'fecha_fin')
                    ->withTimestamps();
    }
}