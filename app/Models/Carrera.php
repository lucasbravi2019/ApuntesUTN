<?php

namespace App\Models;

use App\Models\Apuntes;
use App\Models\Materia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carrera extends Model
{
    protected $fillable = [
        'carrera' , 'slug'
    ];
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function materias()
    {
        return $this->hasMany(Materia::class);
    }
    public function apuntes()
    {
        return $this->hasMany(Apuntes::class);
    }
}
