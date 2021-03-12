<?php

namespace App\Http\Controllers;

use App\Models\Apuntes;
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
    public function destroyed()
    {
        $carreras = Carrera::onlyTrashed()->get();
        $materias = Materia::onlyTrashed()->get();
        $apuntes = Apuntes::onlyTrashed()->get();
        return view('papelera.index', compact('carreras', 'materias', 'apuntes'));
    }
    public function restore(Request $request)
    {
        if($request->elemento == 'carrera')
        {
            $carrera = Carrera::onlyTrashed()->where('slug', $request->elemento_slug)->restore();
            return redirect()->action('InicioController');
        }
        if($request->elemento == 'materia')
        {
            $materia = Materia::onlyTrashed()->where('slug', $request->elemento_slug)->restore();
            return redirect()->action('InicioController');
        }
        if($request->elemento == 'apunte')
        {
            $apunte = Apuntes::onlyTrashed()->where('slug', $request->elemento_slug)->restore();
            return redirect()->action('InicioController');
        }

    }
}
