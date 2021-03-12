@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-white text-center font-bold text-2xl p-3">Crear Tema</h1>
    <nav class="max-w-md mx-auto text-center grid grid-cols-2">
        <button-back
            route="{{ route('apunte.index', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]) }}"
            button-text="Volver"
        ></button-back>
        <button-home></button-home>
    </nav>
    <form method="post" action="{{ action('ApuntesController@update', ['carrera' => $carreraSlug, 'materia' => $materiaSlug, 'apuntes' => $apunte->slug]) }}" class="shadow-md max-w-7xl mx-auto p-5 border border-gray-300">
        @csrf
        @method('PUT')
        <div id="divFuera" class="grid grid-cols-2 my-2 shadow p-1 border border-gray-300 max-w-md mx-auto px-10">
            <label class="py-1" for="numero_tema">Numero de Tema</label>
            <input id="input" class="border border-gray-300 shadow px-2 py-1 @error('numero_tema') border-4  border-red-500 @enderror" type="number" name="numero_tema" value="{{ $apunte->numero_tema }}">
            @error('numero_tema')
                <p class="bg-red-500 text-black col-span-2 my-2 p-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="grid grid-cols-2 my-2 shadow p-1 border border-gray-300 max-w-md mx-auto px-10">
            <label class="py-1" for="tema">Tema</label>
            <input class="border border-gray-300 shadow px-2 py-1 @error('tema') border-4 border-red-500 @enderror" type="text" name="tema" value="{{ $apunte->tema }}">
            @error('tema')
                <p class="bg-red-500 text-black col-span-2 my-2 p-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-2 shadow p-1 border border-gray-300">
            <text-editor desarrollo="{{ $apunte->desarrollo }}"></text-editor>
            @error('desarrollo')
                <p class="bg-red-500 text-black col-span-4 my-2 mx-5 p-2">{{ $message }}</p>
            @enderror
        </div>
            <input type="hidden" name="desarrollo" id="inputDesarrollo">
            <input type="hidden" name="materia_id" value="{{ $materia->id }}">
            <input type="hidden" name="carrera_id" value="{{ $carrera->id }}">
        <button type="submit" class="bg-green-500 block p-3 mx-auto rounded-lg mt-5"><i class="far fa-save"></i> Guardar</button>
    </form>
@endsection
