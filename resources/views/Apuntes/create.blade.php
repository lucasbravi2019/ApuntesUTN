@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-white text-center font-bold text-2xl p-3">Crear Tema</h1>
    <nav class="max-w-md mx-auto text-center">
        <a class="border border-gray-300 text-gray-800 hover:bg-gray-800 hover:text-white p-3 inline-block my-5 rounded text-center" href="{{ route('apunte.index', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]) }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
        <a class="border border-gray-300 text-gray-800 hover:bg-gray-800 hover:text-white p-3 inline-block my-5 rounded text-center" href="{{ route('index') }}"><i class="fas fa-home"></i> Inicio</a>
    </nav>
    <form method="post" action="{{ action('ApuntesController@store', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]) }}" class="shadow-md max-w-7xl mx-auto p-5 border border-gray-300">
        @csrf
        <div class="grid grid-cols-2 my-2 shadow p-1 border border-gray-300 max-w-md mx-auto px-10">
            <label class="py-1" for="numero_tema">Numero de Tema</label>
            <input class="border border-gray-300 shadow px-2 py-1 @error('numero_tema') border-4  border-red-500 @enderror" type="number" name="numero_tema">
            @error('numero_tema')
                <p class="bg-red-500 text-black col-span-2 my-2 p-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="grid grid-cols-2 my-2 shadow p-1 border border-gray-300 max-w-md mx-auto px-10">
            <label class="py-1" for="tema">Tema</label>
            <input class="border border-gray-300 shadow px-2 py-1 @error('tema') border-4 border-red-500 @enderror" type="text" name="tema">
            @error('tema')
                <p class="bg-red-500 text-black col-span-2 my-2 p-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="grid grid-cols-4 my-2 shadow p-1 border border-gray-300">
            <label class="px-10 py-2" for="">Desarrollo</label>
            <textarea class="border col-span-3 border-gray-300 shadow p-3 @error('desarrollo') border-4 border-red-500 @enderror" name="desarrollo" cols="30" rows="50"></textarea>
            @error('desarrollo')
                <p class="bg-red-500 text-black col-span-4 my-2 mx-5 p-2">{{ $message }}</p>
            @enderror
        </div>
            <input type="hidden" name="materia_id" value="{{ $materia->id }}">
            <input type="hidden" name="carrera_id" value="{{ $carrera->id }}">
        <button type="submit" class="bg-green-500 block p-3 mx-auto rounded-lg mt-5"><i class="far fa-save"></i> Guardar</button>
    </form>
@endsection
