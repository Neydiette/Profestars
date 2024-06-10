<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;
    protected $table = 'favoritos';
    protected $fillable = [
        'id_usuario',
        'id_profesor',
    ];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'id_profesor');
    }
}
