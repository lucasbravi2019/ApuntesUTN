<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Materias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'year' => 1,
            'url' => 'sistemas-y-organizaciones',
            'materia' => 'Sistemas y Organizaciones'
        ]);
        DB::table('materias')->insert([
            'year' => 1,
            'url' => 'matematica-discreta',
            'materia' => 'Matemática Discreta'
        ]);
        DB::table('materias')->insert([
            'year' => 1,
            'url' => 'algoritmos-y-estructuras-de-datos',
            'materia' => 'Algoritmos y Estructuras de datos'
        ]);
        DB::table('materias')->insert([
            'year' => 1,
            'url' => 'arquitectura-de-computadoras',
            'materia' => 'Arquitectura de Computadoras'
        ]);
    }
}
