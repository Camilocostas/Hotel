<?php

namespace App\Models;

use App\Traits\HasQueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory, HasQueryScopes;

    protected $table = 'categorias';

    protected $fillable = ['descripcion', 'iva'];

    protected $allowIncluded = ['hoteles'];
    protected $allowFilter   = ['id', 'descripcion', 'iva'];
    protected $allowSort     = ['id', 'descripcion', 'iva'];

    public function hoteles()
    {
        return $this->hasMany(Hotel::class);
    }
}