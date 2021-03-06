@extends('Layouts.app')
@section('content')
    <div class="bg-gray-800 flex">
        <h1 id="title" class=" text-white shadow-md mx-auto text-center font-bold text-3xl p-3">
            {{ $materia->materia }}
        </h1>
        <a href="/" class="bg-gray-200 text-green-700 font-bold rounded my-2 p-2 mr-3">Inicio</a>
    </div>
    <h2 class="bg-gray-500 text-white text-center shadow-md font-bold p-3 text-xl">Índice</h2>
    <ul class="grid lg:grid-cols-3 xl:grid-cols-4 lg:gap-2 my-2">
        <li class="shadow-md font-bold text-lg border border-gray-300 hover:text-white hover:bg-gray-700"><a href="#tema1" class="p-3 w-full block">Tema 1: </a></li>
        <li class="shadow-md font-bold text-lg border border-gray-300 hover:text-white hover:bg-gray-700"><a href="#tema2" class="p-3 w-full block">Tema 2: </a></li>
        <li class="shadow-md font-bold text-lg border border-gray-300 hover:text-white hover:bg-gray-700"><a href="#tema3" class="p-3 w-full block">Tema 3: </a></li>
        <li class="shadow-md font-bold text-lg border border-gray-300 hover:text-white hover:bg-gray-700"><a href="#tema4" class="p-3 w-full block">Tema 4: </a></li>
    </ul>
    <div class="shadow-lg w-full px-10 min-h-screen flex flex-col my-2">
        <h3 id="tema1" class="text-center font-bold text-xl p-3 shadow-lg border border-gray-300">Tema 1: </h3>
        <p class="w-full mb-auto shadow-md p-3 border border-gray-300 my-5 min-h-screen">
            Desarrollo Tema
        </p>
        <a href="#title" class="text-center ml-auto p-3 bg-green-600">Subir</a>
    </div>
    <div class="shadow-lg w-full px-10 min-h-screen flex flex-col my-2">
        <h3 id="tema1" class="text-center font-bold text-xl p-3 shadow-lg border border-gray-300">Tema 1: </h3>
        <p class="w-full mb-auto shadow-md p-3 border border-gray-300 my-5 min-h-screen">
            Desarrollo Tema
        </p>
        <a href="#title" class="text-center ml-auto p-3 bg-green-600">Subir</a>
    </div>
    <div class="shadow-lg w-full px-10 min-h-screen flex flex-col my-2">
        <h3 id="tema1" class="text-center font-bold text-xl p-3 shadow-lg border border-gray-300">Tema 1: </h3>
        <p class="w-full mb-auto shadow-md p-3 border border-gray-300 my-5 min-h-screen">
            Desarrollo Tema
        </p>
        <a href="#title" class="text-center ml-auto p-3 bg-green-600">Subir</a>
    </div>
    <div class="shadow-lg w-full px-10 min-h-screen flex flex-col my-2">
        <h3 id="tema1" class="text-center font-bold text-xl p-3 shadow-lg border border-gray-300">Tema 1: </h3>
        <p class="w-full mb-auto shadow-md p-3 border border-gray-300 my-5 min-h-screen">
            Desarrollo Tema
        </p>
        <a href="#title" class="text-center ml-auto p-3 bg-green-600">Subir</a>
    </div>
    </div>
@endsection
