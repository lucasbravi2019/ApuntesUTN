@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-white text-center p-4 font-bold text-2xl">
        @foreach ($materias as $materia)
            {{ $materia->materia }}
        @endforeach
    </h1>
    <nav class="max-w-md mx-auto my-4 text-center">
        <ul>
            <a class="p-3 bg-green-500 text-gray-700 rounded-lg mx-1 inline-block font-bold" href="{{ route('index', $url) }}">Volver</a>
            <a class="p-3 bg-green-500 text-gray-700 rounded-lg mx-1 inline-block font-bold" href="{{ route('materia.index') }}">Inicio</a>
        </ul>
    </nav>
    <h2 class="text-center text-xl font-bold shadow max-w-sm mx-auto p-2">Tema {{ $apunte->numero_tema }}: {{ ucwords($apunte->tema) }}</h2>
    <p class="shadow-lg max-w-6xl mx-auto my-5 p-5 min-h-screen border border-gray-300">{!! $apunte->desarrollo !!}</p>
@endsection
