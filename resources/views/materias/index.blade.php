@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-center text-white text-3xl p-3 font-bold">Materias</h1>
        <button-back route="{{ route('index') }}" button-text="Volver"></button-back>
        <button-create route="{{ route('materia.create', ['carrera' => $carreraSlug]) }}" button-text="Materia"></button-create>
        @foreach ($materias as $año => $arrayMaterias)
        <div class="border border-gray-300 shadow-lg max-w-6xl mx-auto p-5 rounded-lg">
            <h3 class="text-center text-lg p-3 font-bold">Año {{ $año }}</h3>
            <div class="container grid md:grid-cols-2 xl:grid-cols-3 gap-5 w-full mx-auto">
                @foreach ($arrayMaterias as $materia)
                    <button-materia route="{{ route('apunte.index', ['carrera' => $carreraSlug, 'materia' => $materia->slug]) }}" button-text="{{ $materia->materia }}"></button-materia>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
