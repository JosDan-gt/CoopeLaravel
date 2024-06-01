<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'ClienteID',
        'TecnicoAsignadoID',
        'EquipoID',
        'FechaRecepcion',
        'ProblemaReportado',
        'Estado',
        'Diagnostico',
        'SolucionRealizada',
        'FechaEntrega',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'ClienteID');
    }

    public function tecnico()
    {
        return $this->belongsTo('App\Models\Tecnico', 'TecnicoAsignadoID');
    }

    public function equipo()
    {
        return $this->belongsTo('App\Models\Equipo', 'EquipoID');
    }
}
