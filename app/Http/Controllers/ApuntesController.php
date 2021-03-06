<?php

namespace App\Http\Controllers;

use App\Models\Apuntes;
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
    public function index($url)
    {
        $materias = Materia::where('url', $url)->get();
        foreach($materias as $materia)
        {
            $materia;
        }
        $apuntes = Apuntes::where('materias_id', $materia->id)->get();
        return view('Apuntes.index', compact('materia', 'apuntes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($url)
    {
        $materias = Materia::where('url', $url)->get();
        foreach($materias as $materia)
        {
            $materia;
        }
        return view('Apuntes.create', compact('materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($url,Request $request)
    {

        $data = $request->validate([
            'numero_tema' => 'required',
            'tema' => 'required|min:6',
            'materias_id' => 'required',
            'desarrollo' => 'required|min:10'
        ]);
        Apuntes::create([
            'numero_tema' => $data['numero_tema'],
            'tema' => $data['tema'],
            'materias_id' => $data['materias_id'],
            'desarrollo' => $data['desarrollo']
        ]);
        return redirect()->action('ApuntesController@index', $url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apuntes  $apuntes
     * @return \Illuminate\Http\Response
     */
    public function show($url, $tema)
    {
        $array = explode('-', $tema);
        $string = implode(' ', $array);
        $string = ucwords($string);
        $apuntes = Apuntes::where('tema', $string)->get();
        foreach($apuntes as $apunte)
        {
            $apunte;
        }
        $materias = Materia::where('id', $apunte->materias_id)->get();
        return view('Apuntes.show', compact('apunte','url', 'materias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apuntes  $apuntes
     * @return \Illuminate\Http\Response
     */
    public function edit(Apuntes $apuntes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apuntes  $apuntes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apuntes $apuntes)
    {
        //
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
