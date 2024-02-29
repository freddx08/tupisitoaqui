@extends('layouts.app')

@section('title','Pisos')
@section('content')
    <h1>Aca puedes ver los pisos:</h1>
    <a href="{{ route('homepage') }}">Home</a>
    <ul>
        @foreach ($apartamentos as $piso)
        <li>
            <a href="{{ route('apartamentos.mostrar', $piso->id) }}">{{ $piso -> address }}</a>
        </li>
        @endforeach
    </ul>

    {{ $apartamentos -> links() }}
@endsection