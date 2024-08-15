@extends('layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Clientes</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 text-end">
                        <a href="{{ route('clientes.create') }}" class="btn btn-success">Nuevo Cliente</a>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($clientes && $clientes->count() > 0)
                                @php 
                                    $currentPage = $clientes->currentPage();
                                    $perPage = $clientes->perPage();
                                    $contador = ($currentPage - 1) * $perPage + 1;
                                @endphp
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{ $contador }}</td>
                                        <td>
                                            <a href="{{ route('clientes.show', $cliente) }}">{{ $cliente->nombres }}</a>
                                        </td>
                                    </tr>
                                    @php $contador++; @endphp
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="2" class="text-center">No existe ningún cliente que mostrar</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $clientes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
