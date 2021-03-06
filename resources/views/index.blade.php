@extends('Layouts.app')
@section('content')
    <h1 class="bg-green-400 text-center text-3xl p-3 font-bold">Apuntes UTN - Ingeniería en Sistemas</h1>
    @foreach ($materias as $año => $materia)
        <h2 class="text-center text-lg p-3 font-bold">Año {{ $año }}</h2>
        <div class="container grid md:grid-cols-2 xl:grid-cols-3 gap-5 w-full mx-auto">
        @foreach ($materia as $materiasSistemas)
            <a href="{{ route('index', $materiasSistemas->url) }}" class="bg-green-300 p-3 w-full text-center rounded font-bold text-gray-800 hover:text-white hover:bg-gray-800">{{ $materiasSistemas->materia }}</a>
        @endforeach
        </div>
    @endforeach
@endsection
