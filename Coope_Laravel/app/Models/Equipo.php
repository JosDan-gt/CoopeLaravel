<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'MarcaID',
        'Modelo',
        'NumeroSerie',
        'FechaCompra',
        'Descripcion',
        'Estado',
    ];

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca', 'MarcaID');
    }
}
