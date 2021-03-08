@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-white text-center p-4 font-bold text-2xl">
        @foreach ($materias as $materia)
            {{ $materia->materia }}
        @endforeach
    </h1>
    <a class="p-3 border border-gray-300 my-3 mx-5 text-gray-700 hover:text-white hover:bg-gray-800 rounded-lg inline-block font-bold" href="{{ route('apunte.index', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]) }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
    <a class="p-3 border border-gray-300 my-3 mx-5 text-gray-700 hover:text-white hover:bg-gray-800 rounded-lg inline-block font-bold" href="{{ route('index') }}"><i class="fas fa-home"></i> Inicio</a>
    @foreach ($apuntes as $apunte)
        <h2 class="text-center text-xl font-bold shadow max-w-sm mx-auto p-2">Tema {{ $apunte->numero_tema }}: {{ ucwords($apunte->tema) }}</h2>
        <p class="shadow-lg max-w-6xl mx-auto my-5 p-5 min-h-screen border border-gray-300">{!! $apunte->desarrollo !!}</p>
    @endforeach
@endsection
