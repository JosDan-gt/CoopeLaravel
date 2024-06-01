@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Equipos</div>

                    <div class="card-body">
                        <a href="{{ route('equipos.create') }}" class="btn btn-primary mb-3">Crear Equipo</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Número de Serie</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipos as $equipo)
                                    <tr>
                                        <td>{{ $equipo->ID }}</td>
                                        <td>{{ $equipo->marca->Nombre }}</td>
                                        <td>{{ $equipo->Modelo }}</td>
                                        <td>{{ $equipo->NumeroSerie }}</td>
                                        <td>
                                            <a href="{{ route('equipos.show', $equipo->ID) }}"
                                                class="btn btn-info btn-sm">Ver</a>
                                            <a href="{{ route('equipos.edit', $equipo->ID) }}"
                                                class="btn btn-primary btn-sm">Editar</a>
                                            <form action="{{ route('equipos.destroy', $equipo->ID) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('¿Estás seguro de eliminar este equipo?')">Eliminar</button>
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
