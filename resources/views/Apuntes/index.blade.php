@extends('Layouts.app')
@section('content')
    @foreach ($materias as $materia)
        <h1 class="text-center font-bold bg-indigo-900 text-white p-5 mb-3 text-2xl">{{ $materia->materia }}</h1>
        <div class="grid grid-cols-2 gap-5 max-w-sm ml-10">
            <button-back route="{{ route('materia.index', ['carrera' => $carreraSlug]) }}" button-text="Volver"></button-back>
            <button-home></button-home>
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
        </div>
        <button-create route="{{ route('apunte.create', ['carrera' => $carreraSlug, 'materia' => $materia->slug]) }}" button-text="Tema"></button-create>
        <div class="lg:grid lg:grid-cols-2 xl:grid-cols-3 border-2 border-gray-300">
            @foreach ($materia->apunte as $apunte)
                <div class="m-5">
                    <button-show-tema
                        route="{{ route('apunte.show', ['carrera' => $carreraSlug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"
                        tema="{{ $apunte->tema }}"
                        tema-numero="{{ $apunte->numero_tema }}"
                    ></button-show-tema>
                    <p class="p-5 border border-gray-300 shadow-lg">{!! Str::words($apunte->desarrollo, 200) !!}</p>
                    <div class="grid grid-cols-2 max-w-sm mx-auto">
                        <button-read-more
                            route="{{ route('apunte.show', ['carrera' => $carreraSlug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"
                            button-text="Leer mas"
                        ></button-read-more>
                        <button-edit
                            route="{{ route('apunte.edit', ['carrera' => $carreraSlug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"
                            button-text="Editar"
                        ></button-edit>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
