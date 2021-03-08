<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carreras = Carrera::all();
        foreach($carreras as $carrera)
        {
            $carrera->apuntes;
            $carrera->materias;
        }
        $materias = Materia::all();
        foreach($materias as $materia)
        {
            $materia->apunte;
        }
        return view('index', compact('carreras', 'materias'));
    }
}
