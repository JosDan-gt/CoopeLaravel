<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table = 'tecnicos';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Especialidad',
        'CorreoElectronico',
    ];
}
