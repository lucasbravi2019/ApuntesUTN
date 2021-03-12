@extends('Layouts.app')
@section('content')
    <h1 class="text-center bg-indigo-900 text-white p-3 font-bold text-4xl">Apuntes UTN - FRM</h1>
    @if (count($carreras) < 1)
        <h2 class="w-full text-center font-bold text-xl my-5">No hay carreras que mostrar</h2>
        <div class="grid grid-cols-2 col-span-2 max-w-max gap-3 mx-auto">
            <button-create route="{{ route('carrera.create') }}" button-text="Carrera"></button-create>
            <button-trash
                route="{{ route('trashed') }}"
            ></button-trash>
        </div>
    @else
        @foreach ($carreras as $carrera)
            <section>
                <h2 class="text-center font-bold text-3xl my-4 underline border border-gray-300 rounded-lg p-5 max-w-lg mx-auto bg-indigo-900 text-white">Carrera: {{ $carrera->carrera }}</h2>
                @if (count($carrera->materias) < 1)
                    <h4 class="text-center font-bold text-lg">No hay materias que mostrar</h4>
                    <div class="grid grid-cols-3 col-span-2 max-w-max gap-3 mx-auto">
                        <button-create route="{{ route('materia.create', ['carrera' => $carrera->slug]) }}" button-text="Materia"></button-create>
                        <button-trash
                            route="{{ route('trashed') }}"
                        ></button-trash>
                        <form action="{{ action('CarreraController@destroy', ['carrera' => $carrera->slug]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="delete" value="{{ $carrera->slug }}">
                            <button-delete></button-delete>
                        </form>
                    </div>
                @else
                    <button-materia
                        route="{{ route('materia.index', ['carrera' => $carrera->slug]) }}"
                        button-text="Materias"
                        clase="max-w-xl"
                    ></button-materia>
                    <button-create route="{{ route('materia.create', ['carrera' => $carrera->slug]) }}" button-text="Materia"></button-create>
                    @foreach ($carrera->materias as $materia)
                        <div class=" rounded-md text-gray-700 my-5 grid grid-cols-2 gap-2 max-w-8xl mx-10 border border-gray-400">
                            <button-materia-index
                                route="{{ route('apunte.index', ['carrera' => $carrera->slug, 'materia' => $materia->slug]) }}"
                                materia="{{ $materia->materia }}"
                                year="{{ $materia->year }}"
                            ></button-materia-index>
                            @if (count($materia->apunte) < 1)
                                <div class="col-span-2">
                                    <form action="{{ action('MateriaController@destroy', ['carrera' => $carrera->slug, 'materia' => $materia->slug]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="delete" value="{{ $materia->slug }}">
                                        <button-delete></button-delete>
                                    </form>
                                </div>
                                <p class="text-center col-span-2 font-bold text-md">No hay apuntes que mostrar</p>
                                <div class="grid grid-cols-2 col-span-2 max-w-max gap-3 mx-auto">
                                    <button-create route="{{ route('apunte.create', ['carrera' => $carrera->slug, 'materia' => $materia->slug]) }}" button-text="Apunte"></button-create>
                                    <button-trash
                                        route="{{ route('trashed') }}"
                                    ></button-trash>
                                </div>
                            @else
                                <div class="grid grid-cols-2 col-span-2 max-w-max gap-3 mx-auto">
                                    <button-create
                                        route="{{ route('apunte.create', ['carrera' => $carrera->slug, 'materia' => $materia->slug]) }}"
                                        button-text="Apunte"
                                    ></button-create>
                                    <button-trash
                                        route="{{ route('trashed') }}"
                                    ></button-trash>
                                </div>
                                <div class="p-5 gap-3 col-span-2 lg:grid lg:grid-cols-2 xl:grid-cols-3">
                                    @foreach ($materia->apunte as $apunte)
                                        <div class="border border-gray-300 p-3 rounded-lg text-center">
                                            <button-show-tema
                                                route="{{ route('apunte.show', ['carrera' => $carrera->slug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"
                                                tema="{{ $apunte->tema }}"
                                                tema-numero="{{ $apunte->numero_tema }}"
                                            ></button-show-tema>
                                            <text-apunte
                                                desarrollo="{{ Str::words($apunte->desarrollo, 50) }}"
                                            ></text-apunte>
                                            <div class="grid grid-cols-3 max-w-max mx-auto gap-5">
                                                <button-read-more
                                                route="{{ route('apunte.show', ['carrera' => $carrera->slug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"
                                                button-text="Leer mas"
                                                ></button-read-more>
                                                <button-edit
                                                    route="{{ route('apunte.edit', ['carrera' => $carrera->slug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"
                                                    button-text="Editar"
                                                ></button-edit>
                                                <form
                                                    method="POST"
                                                    action="{{ action('ApuntesController@destroy', ['carrera' => $carrera->slug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button-delete></button-delete>
                                                    <input type="hidden" name="delete" value="{{ $apunte->slug }}">
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                @endif
            </section>
        @endforeach
        <button-create route="{{ route('carrera.create') }}" button-text="Carrera"></button-create>
    @endif
@endsection
