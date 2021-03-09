<?php

namespace App\Http\Controllers;

use App\Models\Apuntes;
use App\Models\Carrera;
use App\Models\Materia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ApuntesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($carreraSlug, $materiaSlug)
    {
        $materias = Materia::where('slug', $materiaSlug)->get();
        foreach($materias as $materia)
        {
            $materia->apunte;
        }
        return view('Apuntes.index', compact('materias', 'carreraSlug', 'materiaSlug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($carreraSlug, $materiaSlug)
    {
        $carreras = Carrera::where('slug', $carreraSlug)->get();
        foreach($carreras as $carrera)
        {
            $carrera;
        }
        $materias = Materia::where('slug', $materiaSlug)->get();
        foreach($materias as $materia)
        {
            $materia;
        }
        return view('Apuntes.create', compact('carrera', 'materia', 'carreraSlug', 'materiaSlug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($carreraSlug,$materiaSlug, Request $request)
    {
        $carrera = Carrera::where('slug', $carreraSlug)->get();
        foreach($carrera as $id)
        {
            $carrera_id = $id->id;
        }
        $data = $request->validate([
            'numero_tema' => 'required',
            'tema' => 'required|min:6',
            'materia_id' => 'required',
            'desarrollo' => 'required|min:10'
            ]);
        $request->slug = Str::slug($data['tema'], '-');
        $data['slug'] = $request->slug;
        Apuntes::create([
            'numero_tema' => $data['numero_tema'],
            'tema' => $data['tema'],
            'carrera_id' => $carrera_id,
            'materia_id' => $data['materia_id'],
            'desarrollo' => $data['desarrollo'],
            'slug' => $data['slug']
        ]);
        return redirect()->action('ApuntesController@index', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apuntes  $apuntes
     * @return \Illuminate\Http\Response
     */
    public function show($carreraSlug, $materiaSlug, $apunteSlug)
    {
        $carreras = Carrera::where('slug', $carreraSlug)->get();
        $materias = Materia::where('slug', $materiaSlug)->get();
        $apuntes = Apuntes::where('slug', $apunteSlug)->get();
        return view('Apuntes.show', compact('carreras','materias','apuntes', 'carreraSlug', 'materiaSlug', 'apunteSlug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apuntes  $apuntes
     * @return \Illuminate\Http\Response
     */
    public function edit($carreraSlug, $materiaSlug, $apunteSlug)
    {
        $carreras = Carrera::where('slug', $carreraSlug)->get();
        foreach($carreras as $carrera)
        {
            $carrera;
        }
        $materias = Materia::where('slug', $materiaSlug)->get();
        foreach($materias as $materia)
        {
            $materia;
        }
        $apuntes = Apuntes::where('slug', $apunteSlug)->get();
        foreach($apuntes as $apunte)
        {
            $apunte;
        }
        return view('Apuntes.edit', compact('carrera', 'materia', 'apunte', 'carreraSlug', 'materiaSlug', 'apunteSlug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apuntes  $apuntes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $carreraSlug, $materiaSlug, $apunteSlug)
    {
        $apuntes = Apuntes::where('slug', $apunteSlug)->get();
        foreach($apuntes as $apunte)
        {
            $apunte;
        }
        $request->validate([
            'numero_tema' => 'required',
            'tema' => 'required|min:5',
            'desarrollo' => 'required',
            'materia_id' => 'required',
            'carrera_id' => 'required'
        ]);
        $apunte->numero_tema = $request->numero_tema;
        $apunte->tema = $request->tema;
        $apunte->desarrollo = $request->desarrollo;
        $apunte->materia_id = $request->materia_id;
        $apunte->carrera_id = $request->carrera_id;
        $apunte->save();
        return redirect()->action('ApuntesController@index', ['carrera' => $carreraSlug, 'materia' => $materiaSlug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apuntes  $apuntes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apuntes $apuntes)
    {
        //
    }
}
