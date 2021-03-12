<?php

namespace App\Models;

use App\Models\Apuntes;
use App\Models\Carrera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materia extends Model
{
    use SoftDeletes;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public $timestamps = false;
    protected $fillable = [
        'carrera_id', 'materia', 'year', 'slug'
    ];
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
    public function apunte()
    {
        return $this->hasMany(Apuntes::class);
    }
}
