@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles del Equipo</div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Marca:</strong>
                            @if ($equipo->marca)
                                {{ $equipo->marca->Nombre }}
                            @else
                                Marca no especificada
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $equipo->Modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Número de Serie:</strong>
                            {{ $equipo->NumeroSerie }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Compra:</strong>
                            {{ $equipo->FechaCompra }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $equipo->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $equipo->Estado }}
                        </div>
                        <a class="btn btn-primary" href="{{ route('equipos.index') }}">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
