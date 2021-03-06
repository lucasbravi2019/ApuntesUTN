<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all()->groupBy('year');
        return view('index', compact('materias'));
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
}
