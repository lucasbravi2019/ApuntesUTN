<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuntes extends Model
{
    protected $fillable = [
        'numero_tema', 'tema', 'materias_id', 'desarrollo'
    ];
    public $timestamps = false;

}
