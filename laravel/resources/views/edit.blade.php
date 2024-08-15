@extends('layout')

@section('title', 'Editar Cliente')

@section('content')

    <div style="text-align:center;">
        <h2 style="width: 50%; margin-left: 1%; text-align:center;" > Edita los campos que necesites:</h2>
        <br>
        <table cellpadding="3" cellspacing="5">
        
            @include('partials.validation-errors')
            <form action="{{ route('clientes.update', $cliente) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @include('partials.form', ['btnText' => 'Actualizar'])
            </form>
        </table>
    </div>
@endsection