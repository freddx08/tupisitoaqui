@extends('layouts.layout')

@section('title','Ver piso')

@section('content')
    <a href="{{ route('apartamentos.index') }}">Volver</a>
    <h1> {{ $apartamento -> address }} </h1>
    <p><strong>Precio: </strong>{{ $apartamento -> price }}</p>
    <h3><strong>Datos de contacto: </strong></h3>
    <ul>
        <li>{{ $apartamento -> owner_name }}</li>
        <li>{{ $apartamento -> phone_contact }}</li>
        <li>{{ $apartamento -> email }}</li>
    </ul>
@endsection