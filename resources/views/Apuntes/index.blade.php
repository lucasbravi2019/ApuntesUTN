@extends('Layouts.app')
@section('content')
    <h1 class="text-center font-bold bg-indigo-900 text-white p-5 mb-3 text-2xl">{{ $materia->materia }}</h1>
    <nav class="mx-auto max-w-sm mb-5">
        <a class="bg-green-500 text-center text-gray-700 p-2 rounded-md inline-block mx-1 font-bold" href="{{ route('materia.index') }}">Inicio</a>
        <a class="bg-green-500 text-center text-gray-700 p-2 rounded-md inline-block mx-1 font-bold" href="{{ route('create', $materia->url) }}">Crear Tema</a>
    </nav>
    @foreach ($apuntes as $apunte)
        <h2 class="font-bold block mx-auto max-w-lg"><a href="{{ route('show', ['materia' => $materia->url, 'apuntes' => Str::slug($apunte->tema)]) }}">Tema {{ $apunte->numero_tema }}: {{ ucwords($apunte->tema) }}</a></h2>
    @endforeach
@endsection
