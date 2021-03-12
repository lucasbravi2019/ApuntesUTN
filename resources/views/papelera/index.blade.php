@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-white font-bold text-center text-4xl p-3">Papelera</h1>
    <button-back
        route="{{ route('index') }}"
        button-text="Volver"
    ></button-back>
    <div class="max-w-max mx-auto my-5">
        @if (count($carreras) < 1)
            <element-trashed
                nombre="No hay carreras eliminadas"
            ></element-trashed>
        @else
            @foreach ($carreras as $carrera)
                <form action="{{ action('InicioController@restore') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2">
                        <element-trashed
                            nombre="{{ $carrera->carrera }}"
                        ></element-trashed>
                        <input type="hidden" name="elemento" value="carrera">
                        <input type="hidden" name="elemento_slug" value="{{ $carrera->slug }}">
                        <button-restore></button-restore>
                    </div>
                </form>

            @endforeach
        @endif
        @if(count($materias) < 1)
            <element-trashed
                nombre="No hay materias eliminadas"
            ></element-trashed>
        @else
            @foreach ($materias as $materia)
                <form action="{{ action('InicioController@restore') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2">
                        <input type="hidden" name="elemento" value="materia">
                        <input type="hidden" name="elemento_slug" value="{{ $materia->slug }}">
                        <element-trashed
                            nombre="{{ $materia->materia }}"
                        ></element-trashed>
                        <button-restore></button-restore>
                    </div>
                </form>
            @endforeach
        @endif
        @if (count($apuntes) < 1)
            <element-trashed
                nombre="No hay apuntes eliminados"
            ></element-trashed>
        @else
            @foreach ($apuntes as $apunte).
                <form action="{{ action('InicioController@restore') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2">
                        <element-trashed
                            nombre="{{ $apunte->tema }}"
                        ></element-trashed>
                        <input type="hidden" name="elemento" value="apunte">
                        <input type="hidden" name="elemento_slug" value="{{ $apunte->slug }}">
                        <button-restore></button-restore>
                    </div>
                </form>
            @endforeach
        @endif
    </div>
@endsection
