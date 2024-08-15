@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h1>Bienvenido a Nuestro Sitio</h1>
                </div>
                <div class="card-body text-center">
                    <p class="lead">
                        Estamos encantados de tenerte aquí. Explora nuestros servicios y descubre todo lo que tenemos para ofrecer.
                    </p>
                    <a href="{{ url('/servicios') }}" class="btn btn-primary mt-3">Ver servicios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
