<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrategia extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titulo',
        'profesor_id',
        'materia_id',
        'semestre',
        'estrategia',
        'estado',
        'etiquetas',
        'like',
        'dislike',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class, 'id_estrategia');
    }
}
