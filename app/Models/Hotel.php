<?php

namespace App\Models;

use App\Traits\HasQueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory, HasQueryScopes;

    protected $table = 'hoteles';

    protected $fillable = ['nombre', 'direccion', 'tfno', 'anio', 'categoria_id'];

    protected $allowIncluded = ['categoria', 'habitaciones', 'habitaciones.agencias', 'habitaciones.particulares'];
    protected $allowFilter   = ['id', 'nombre', 'direccion', 'anio', 'categoria_id'];
    protected $allowSort     = ['id', 'nombre', 'anio'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class);
    }
}