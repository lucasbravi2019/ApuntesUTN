@extends('Layouts.app')
@section('content')
    <h1 class="bg-green-400 text-center text-3xl p-3 font-bold">Apuntes UTN</h1>
        <a href="{{ route('index') }}" class="block mx-5 w-24 p-2 my-3 hover:bg-gray-800 hover:text-white text-center border border-gray-200"><i class="fas fa-arrow-circle-left"></i> Volver</a>
        <a href="{{ route('materia.create', ['carrera' => $carreraSlug]) }}" class="block mx-auto w-24 p-2 my-3 hover:bg-gray-800 hover:text-white text-center border border-gray-200"><i class="fas fa-plus"></i> Materia</a>
    @foreach ($materias as $año => $arrayMaterias)
        <h3 class="text-center text-lg p-3 font-bold">Año {{ $año }}</h3>
        <div class="container grid md:grid-cols-2 xl:grid-cols-3 gap-5 w-full mx-auto">
            @foreach ($arrayMaterias as $materia)
                <a href="{{ route('apunte.index', ['carrera' => $carreraSlug, 'materia' => $materia->slug]) }}" class="bg-green-300 p-3 w-full text-center rounded font-bold text-gray-800 hover:text-white hover:bg-gray-800">{{ $materia->materia }}</a>
            @endforeach
        </div>
    @endforeach
@endsection
