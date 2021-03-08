@extends('Layouts.app')
@section('content')
    <h1 class="bg-indigo-800 text-white p-4 font-bold text-2xl text-center">Crear Carrera</h1>
    <a href="{{ route('index') }}" class="border border-gray-300 p-3 text-center font-bold rounded-md block w-24 mx-10 my-2 hover:bg-gray-800 hover:text-white"><i class="fas fa-arrow-circle-left"></i> Volver</a>
    <form action="{{ action('CarreraController@store') }}" method="POST" class="border border-gray-300 shadow-md mx-auto max-w-md my-10">
        @csrf
        <div class="grid grid-cols-2 p-3 gap-3">
            <label class="block p-1" for="carrera">Nombre Carrera</label>
            <input class="block border border-gray-300 p-1" type="text" name="carrera">
        </div>
        <button class="text-center max-w-full mx-auto p-2 block" type="submit"><i class="far fa-save"></i> Guardar</button>
    </form>
@endsection
