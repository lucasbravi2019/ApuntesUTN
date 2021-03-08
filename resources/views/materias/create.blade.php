@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-900 text-white text-center font-bold text-2xl p-4">Crear Materia</h1>
    <a class="ml-16 font-bold shadow-md text-center w-24 hover:bg-gray-800 hover:text-white p-2 my-5 block" href="{{ route('materia.index', ['carrera' => $carreraSlug]) }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
    <form action="{{ action('MateriaController@store', ['carrera' => $carreraSlug]) }}" method="post" class="max-w-lg mx-auto shadow-md p-3">
        @csrf
        <div class="border border-gray-300 my-2 p-3 mx-auto max-w-md grid grid-cols-2 shadow-md">
            <label class="py-1" for="materia">Materia:</label>
            <input name="materia" class="border border-gray-200 shadow-md p-1" type="text">
        </div>
        <div class="border border-gray-300 my-2 p-3 mx-auto max-w-md grid grid-cols-2 shadow-md">
            <label class="py-1" for="year">Año:</label>
            <input name="year" class="border border-gray-200 shadow-md p-1" type="number">
        </div>
        <input type="hidden" name="carrera_id" value="{{ $carrera }}">
        <button class="block bg-green-200 w-auto p-3 rounded-md mx-auto my-5" type="submit"><i class="far fa-save"></i> Guardar Materia</button>
    </form>
@endsection
