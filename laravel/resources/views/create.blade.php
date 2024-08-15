@extends('layout')

@section('title', 'Registrar cliente')

@section('content')

    <div style="text-align:center;">
    <h2 style="width: 50%; margin-left: 1%; text-align:center;" > Registrar nuevo cliente</h2>
    <br>
    <table cellpadding="3" cellspacing="5">
        @include('partials.validation-errors')
        <form action="{{ route('clientes.store') }}" method="post">
            @include('partials.form', ['btnText' => 'Guardar'])
        </form>
    </table>
    </div>
@endsection