@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Lista de Clientes</span>
                            <a href="{{ route('clientes.create') }}" class="btn btn-light btn-sm">Crear Cliente</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Correo Electrónico</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->ID }}</td>
                                            <td>{{ $cliente->Nombre }}</td>
                                            <td>{{ $cliente->Direccion }}</td>
                                            <td>{{ $cliente->Telefono }}</td>
                                            <td>{{ $cliente->CorreoElectronico }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Acciones">
                                                    <a href="{{ route('clientes.show', $cliente->ID) }}" class="btn btn-info btn-sm">Ver</a>
                                                    <a href="{{ route('clientes.edit', $cliente->ID) }}" class="btn btn-primary btn-sm">Editar</a>
                                                    <form action="{{ route('clientes.destroy', $cliente->ID) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Lista de Marcas</span>
                            <a href="{{ route('marcas.create') }}" class="btn btn-light btn-sm">Crear Marca</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
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
                                                <div class="btn-group" role="group" aria-label="Acciones">
                                                    <a href="{{ route('marcas.show', $marca->ID) }}" class="btn btn-info btn-sm">Ver</a>
                                                    <a href="{{ route('marcas.edit', $marca->ID) }}" class="btn btn-primary btn-sm">Editar</a>
                                                    <form action="{{ route('marcas.destroy', $marca->ID) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta marca?')">Eliminar</button>
                                                    </form>
                                                </div>
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
    </div>
@endsection
