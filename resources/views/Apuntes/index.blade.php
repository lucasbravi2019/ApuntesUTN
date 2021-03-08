@extends('Layouts.app')
@section('content')
    @foreach ($materias as $materia)
        <h1 class="text-center font-bold bg-indigo-900 text-white p-5 mb-3 text-2xl">{{ $materia->materia }}</h1>
        <a class="text-center text-gray-700 p-2 rounded-md inline-block mx-5 w-24 border border-gray-300 font-bold" href="{{ route('materia.index', ['carrera' => $carreraSlug]) }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
        <a class="text-center text-gray-700 p-2 rounded-md inline-block mx-5 w-24 border border-gray-300 font-bold" href="{{ route('index', ['carrera' => $carreraSlug]) }}"><i class="fas fa-home"></i> Inicio</a>
        <a class="text-center text-gray-700 p-2 rounded-md block border border-gray-300 mx-auto mb-5 w-24 font-bold" href="{{ route('apunte.create', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]) }}"><i class="fas fa-plus"></i> Tema</a>
        @foreach ($materia->apunte as $apunte)
            <h2 class="font-bold block mx-auto my-1 border border-gray-300 rounded-md p-2 max-w-md"><a href="{{ route('apunte.show', ['carrera' => $carreraSlug, 'materia' => $materiaSlug, 'apuntes' => $apunte->slug]) }}">Tema {{ $apunte->numero_tema }}: {{ ucwords($apunte->tema) }}</a></h2>
        @endforeach
    @endforeach
@endsection
