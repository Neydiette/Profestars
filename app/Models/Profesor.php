<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'nombre_completo',
        'imagen1',
        'imagen2',
        'correo',
        'nivel',
        'rango',
        'copas',
        'frase',
        'semestres',
        'dificultad',
        'reprobacion',
        'paciencia',
        'caracter',
        'horarios',
        'skills',
        'clases'
    ];

    protected $casts = [
        'semestres' => 'json',
        'horarios' => 'json',
        'skills' => 'json',
        'clases' => 'json'
    ];

    public function favoritos()
    {
        return $this->hasMany(Favorito::class, 'id_profesor');
    }
}
