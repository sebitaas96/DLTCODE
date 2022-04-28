@extends('layouts.front')

@section('content')
    <div id="tools" class="container py-5">
        <h1 class="text-center text-secondary mb-5">Herramientas</h1>
        <div class="row">
            {{-- OPERATOR --}}
            <div class="col-12 col-sm-6 col-md-4">
                <a href="{{ route('tools.operator') }}">
                    <div class="card shadow-sm card-body">
                        <img src="{{ asset('img/operator-2.webp') }}">
                        <h2 class="title">De qué operador es un número</h2>
                    </div>
                </a>
            </div>

            {{-- SECURE YOUR CEO --}}
            <div class="col-12 col-sm-6 col-md-4">
                <a href="https://secureyourceo.es/">
                    <div class="card shadow-sm card-body">
                        <img src="{{ asset('img/secure_your_ceo.webp') }}">
                        <h2 class="title">¿Mi correo es seguro?</h2>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="card shadow-sm card-body">
                    <img src="{{ asset('img/proximamente.png') }}">
                    <h2 class="title">Analizador de cabeceras</h2>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="card shadow-sm card-body">
                    <img src="{{ asset('img/proximamente.png') }}">
                    <h2 class="title">Herramientas de recuperación de datos</h2>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="card shadow-sm card-body">
                    <img src="{{ asset('img/proximamente.png') }}">
                    <h2 class="title">Analiza la seguridad de mi IP</h2>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="card shadow-sm card-body">
                    <img src="{{ asset('img/proximamente.png') }}">
                    <h2 class="title">¿Es mi contraseña segura?</h2>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-md-4">
                <div class="card shadow-sm card-body">
                    <img src="{{ asset('img/proximamente.png') }}">
                    <h2 class="title">Descubre subdominios</h2>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card shadow-sm card-body">
                    <img src="{{ asset('img/proximamente.png') }}">
                    <h2 class="title">Whois</h2>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card shadow-sm card-body">
                    <img src="{{ asset('img/proximamente.png') }}">
                    <h2 class="title">¿Cumple mi web con la GDPR?</h2>
                </div>
            </div>

        </div>
    </div>

    @include('components.google')

@endsection

