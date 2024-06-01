@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Listado de Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Crear Nuevo Cliente</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->ID }}</td>
            <td>{{ $cliente->Nombre }}</td>
            <td>{{ $cliente->Direccion }}</td>
            <td>{{ $cliente->Telefono }}</td>
            <td>{{ $cliente->CorreoElectronico }}</td>
            <td>
                <form action="{{ route('clientes.destroy',$cliente->ID) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('clientes.show',$cliente->ID) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->ID) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
