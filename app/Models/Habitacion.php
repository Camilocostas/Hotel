<?php

namespace App\Models;

use App\Traits\HasQueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory, HasQueryScopes;

    protected $table = 'habitaciones';

    protected $fillable = ['codigo', 'tipo', 'fecha_ini', 'fecha_fin', 'hotel_id'];

    protected $casts = ['fecha_ini' => 'date', 'fecha_fin' => 'date'];

    protected $allowIncluded = ['hotel', 'hotel.categoria', 'agencias', 'particulares'];
    protected $allowFilter   = ['id', 'codigo', 'tipo', 'hotel_id'];
    protected $allowSort     = ['id', 'codigo', 'tipo', 'fecha_ini', 'fecha_fin'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function agencias()
    {
        return $this->belongsToMany(Agencia::class, 'agencia_habitacion')
                    ->withPivot('fecha_ini', 'fecha_fin')
                    ->withTimestamps();
    }

    public function particulares()
    {
        return $this->belongsToMany(Particular::class, 'particular_habitacion')
                    ->withPivot('fecha_ini', 'fecha_fin')
                    ->withTimestamps();
    }
}