<!-- resources/views/marcas/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles de la Marca</div>

                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $marca->ID }}</p>
                        <p><strong>Nombre:</strong> {{ $marca->Nombre }}</p>
                        <a href="{{ route('marcas.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
