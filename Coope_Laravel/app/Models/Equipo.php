<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'MarcaID', 'Modelo', 'NumeroSerie', 'FechaCompra', 'Descripcion', 'Estado',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'MarcaID', 'id');
    }
}


