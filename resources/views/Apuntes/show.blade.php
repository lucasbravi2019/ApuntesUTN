@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-white text-center p-4 font-bold text-2xl">
        @foreach ($materias as $materia)
            {{ $materia->materia }}
        @endforeach
    </h1>
    <div class="grid grid-cols-2 gap-5 max-w-sm ml-10">
        <button-back
            route="{{ route('apunte.index', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]) }}"
            button-text="Volver"
        ></button-back>
        <button-home
            route="{{ route('index') }}"
            button-text="Inicio"
        ></button-home>
    </div>
    <div class="m-5 max-w-max">
        <link-route
        route="{{ route('index') }}"
        link="Inicio"
        ></link-route>
        >
        <link-route
            route="{{ route('materia.index', ['carrera' => $carreraSlug]) }}"
            link="Materias"
        ></link-route>
        >
        <link-route
            route="{{ route('apunte.index', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]) }}"
            link="Apuntes"
        ></link-route>
    </div>
    @foreach ($apuntes as $apunte)
        <h2
            class="text-center text-xl font-bold border border-gray-300 shadow max-w-sm mx-auto p-2"
        >Tema {{ $apunte->numero_tema }}: {{ ucwords($apunte->tema) }}</h2>
        <button-edit
            route="{{ route('apunte.edit', ['carrera' => $carreraSlug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"
            button-text="Editar"
        ></button-edit>
        <div class="px-16 py-5 w-full">
            <text-apunte
                desarrollo="{{ $apunte->desarrollo }}"
            ></text-apunte>
        </div>
    @endforeach
@endsection
