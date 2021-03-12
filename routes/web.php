<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'InicioController')->name('index');
Route::get('/papelera', 'InicioController@destroyed')->name('trashed');
Route::post('/papelera', 'InicioController@restore')->name('restore');
Route::resource('/carrera', 'CarreraController')->names([
    'index' => 'carrera.index',
    'create' => 'carrera.create',
    'show' => 'carrera.show',
    'store' => 'carrera.store',
    'edit' => 'carrera.edit',
    'update' => 'carrera.update',
    'destroy' => 'carrera.destroy'
])->parameters([
    '' => 'carrera'
]);
Route::resource('/carrera/{carrera}/materias', 'MateriaController')->names([
    'index' => 'materia.index',
    'create' => 'materia.create',
    'store' => 'materia.store',
    'update' => 'materia.update',
    'destroy' => 'materia.destroy',
    'edit' => 'materia.edit',
    'show' => 'materia.show'
])->parameters([
    '' => 'materia'
]);
Route::resource('/carrera/{carrera}/materias/{materia}/', 'ApuntesController')->names([
    'index' => 'apunte.index',
    'create' => 'apunte.create',
    'show' => 'apunte.show',
    'edit' => 'apunte.edit' ,
    'store' => 'apunte.store',
    'update' => 'apunte.update',
    'destroy' => 'apunte.destroy'
])->parameters([
    '' => 'apuntes'
]);
