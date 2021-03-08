@extends('Layouts.app')
@section('content')
    <h1 class="text-center bg-indigo-900 text-white p-3 font-bold text-2xl">Apuntes UTN - FRM</h1>
    <a href="{{ route('carrera.create') }}" class="border border-gray-300 rounded-md mx-auto block my-3 p-2 w-24 text-center font-bold hover:text-white hover:bg-gray-700"><i class="fas fa-plus"></i> Carrera</a>
    @if (count($carreras) < 1)
        <h2 class="w-full text-center font-bold text-xl my-5">No hay carreras que mostrar</h2>
    @else
        @foreach ($carreras as $carrera)
            <section>
                <h2 class="text-center font-bold text-xl my-4">Carrera: {{ $carrera->carrera }}</h2>
                @if (count($carrera->materias) < 1)
                <h4 class="text-center font-bold text-lg">No hay materias que mostrar</h4>
                <a class="border border-gray-300 rounded-md block w-24 text-center font-bold hover:bg-gray-800 hover:text-white p-2 mx-auto my-5" href="{{ route('materia.create', ['carrera' => $carrera->slug]) }}"><i class="fas fa-plus"></i> Materia</a>
                @else
                <div class="grid grid-cols-2 max-w-md mx-auto">
                    <a class="border border-gray-300 rounded-md block w-24 text-center font-bold hover:bg-gray-800 hover:text-white p-2 mx-auto my-5" href="{{ route('materia.create', ['carrera' => $carrera->slug]) }}"><i class="fas fa-plus"></i> Materia</a>
                    <a class="text-center block mx-auto p-2 my-5" href="{{ route('materia.index', ['carrera' => $carrera->slug]) }}"><i class="fas fa-book-reader"></i> Ver Materias</a>
                </div>
                    <h3 class="bg-gray-300 text-gray-700 p-3 max-w-sm text-center mx-auto font-bold">Materias</h3>
                    @foreach ($carrera->materias as $materia)
                    <div class=" rounded-md text-gray-700 my-5 grid grid-cols-2 gap-2 max-w-2xl mx-auto">
                        <h4 class="bg-gray-300 w-full text-center mx-auto block p-2 text-gray-700 font-bold">
                            {{$materia->materia}}
                        </h4>
                        <p class="font-bold text-md w-full p-2 border border-gray-700 max-w-sm text-center">
                            Año de cursado: {{$materia->year}}
                        </p>
                    </div>
                        @if (count($materia->apunte) < 1)
                            <p class="text-center font-bold text-md">No hay apuntes que mostrar</p>
                            <a class="border border-gray-300 rounded-md block w-24 text-center font-bold hover:bg-gray-800 hover:text-white p-2 mx-auto my-5" href="{{ route('apunte.create', ['carrera' => $carrera->slug, 'materia' => $materia->slug]) }}"><i class="fas fa-plus"></i> Apunte</a>
                        @else
                            <p class="bg-indigo-300 p-2 text-center text-gray-700 font-bold">
                                Apuntes
                            </p>
                            <a class="border border-gray-300 rounded-md block w-24 text-center font-bold hover:bg-gray-800 hover:text-white p-2 mx-auto my-5" href="{{ route('apunte.create', ['carrera' => $carrera->slug, 'materia' => $materia->slug]) }}"><i class="fas fa-plus"></i> Apunte</a>
                            <div class="p-5 grid grid-cols-2 gap-3">
                                @foreach ($materia->apunte as $apunte)
                                    <div>
                                        <h5 class="font-bold text-center">
                                            Tema {{ $apunte->numero_tema }}: {{ $apunte->tema }}
                                        </h5>
                                        <p class="p-3 bg-gray-300 my-3">
                                            {{ Str::words($apunte->desarrollo, 100) }}
                                        </p>
                                        <a class="my-3 block px-5" href="{{ route('apunte.show', ['carrera' => $carrera->slug, 'materia' => $materia->slug, 'apuntes' => $apunte->slug]) }}"><i class="fas fa-book-reader"></i> Leer más</a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                @endif
            </section>
        @endforeach
    @endif
@endsection
