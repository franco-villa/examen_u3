@extends('layout')

@section('title', 'Cliente | ' . $cliente->nombres)

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Detalle del Cliente</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <td>{{ $cliente->nombres }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $cliente->email }}</td>
                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <td>{{ $cliente->direccion }}</td>
                            </tr>
                            <tr>
                                <th>Teléfono</th>
                                <td>+51 {{ $cliente->fono }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center mt-4">
                        <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-success mx-2">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
