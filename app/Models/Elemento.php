<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_profesor',
        'tipo',
        'ruta',
        'dato',
    ];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'id_profesor');
    }
}
