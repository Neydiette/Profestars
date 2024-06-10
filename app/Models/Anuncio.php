<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'user_id',
        'profesor_id',
        'semestre',
        'anuncio',
        'imagen_path',
        'prioridad',
    ];

    
    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = strtolower($value);
    }
    public function setSemestreAttribute($value)
    {
        $this->attributes['semestre'] = strtolower($value);
    }
    public function setanuncioAttribute($value)
    {
        $this->attributes['anuncio'] = strtolower($value);
    }
    public function setPrioridadAttribute($value)
    {
        $this->attributes['prioridad'] = strtolower($value);
    }

    
    public function getTituloAttribute($value)
    {
        return ucfirst($value);
    }

    public function getSemestreAttribute($value)
    {
        return ucfirst($value);
    }

    public function getanuncioAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPrioridadAttribute($value)
    {
        return ucfirst($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }
}
