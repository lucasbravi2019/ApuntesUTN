<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($carreraSlug)
    {
        $materias = Materia::all()->groupBy('year');
        return view('materias.index', compact('materias', 'carreraSlug'));
    }
    public function sistemas_y_organizaciones($id)
    {
        $materias = Materia::where('url', $id)->get();
        foreach($materias as $materia)
        {
            $materia;
        }
        return view('sistemas-y-organizaciones', compact('materia'));
    }
    public function create($carreraSlug)
    {
        $carreras = Carrera::where('slug', $carreraSlug)->get();
        foreach($carreras as $carrera)
        {
            $carrera = $carrera->id;
        }
        return view('materias.create', compact('carreraSlug', 'carrera'));
    }
    public function edit()
    {

    }
    public function show()
    {

    }
    public function store(Request $request)
    {
        $slug = Str::slug($request->materia, '-');
        $data = $request->validate([
            'materia' => 'required',
            'carrera_id' => 'required',
            'year' => 'required|max:6'
        ]);
        $materia = Materia::create([
            'carrera_id' => $data['carrera_id'],
            'materia' => $data['materia'],
            'year' => $data['year'],
            'slug' => $slug
        ]);
        return redirect()->action('InicioController');
    }
    public function update()
    {

    }
    public function destroy(Request $request)
    {
        $materia = Materia::where('slug',  $request->delete);
        $materia->delete();
        return redirect()->action('InicioController');
    }
}
