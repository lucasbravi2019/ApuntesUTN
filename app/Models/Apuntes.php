<?php

namespace App\Models;

use App\Models\Carrera;
use App\Models\Materia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apuntes extends Model
{
    use SoftDeletes;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $fillable = [
        'numero_tema', 'tema', 'materia_id', 'carrera_id', 'desarrollo', 'slug'
    ];
    public $timestamps = false;
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}
