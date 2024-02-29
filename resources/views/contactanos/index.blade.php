@extends('layouts.layout')

@section('title', 'Contáctanos')

@section('content')
    <h1>Contáctanos</h1>
    <p>Déjanos un mensaje</p>

    <form action="{{ route('contactanos.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>

        @error('name')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="email" value="{{ old('email') }}">
        </label>

        @error('email')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4" value="{{ old('mensaje') }}"></textarea>
        </label>

        @error('mensaje')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <br>
    
        <button type="submit">
            Enviar mensaje
        </button>
    </form>


        <x-alert>
            <p>Texto de prueba</p>
        <x-alert />

        

@endsection