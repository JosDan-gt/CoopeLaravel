<!-- resources/views/marcas/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Marcas</div>

                    <div class="card-body">
                        <a href="{{ route('marcas.create') }}" class="btn btn-primary mb-3">Crear Marca</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marcas as $marca)
                                    <tr>
                                        <td>{{ $marca->ID }}</td>
                                        <td>{{ $marca->Nombre }}</td>
                                        <td>
                                            <a href="{{ route('marcas.show', $marca->ID) }}" class="btn btn-info btn-sm">Ver</a>
                                            <a href="{{ route('marcas.edit', $marca->ID) }}" class="btn btn-primary btn-sm">Editar</a>
                                            <form action="{{ route('marcas.destroy', $marca->ID) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta marca?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
