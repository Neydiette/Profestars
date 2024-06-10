<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $table = 'reportes';
    protected $fillable = [
        'id_usuario',
        'id_estrategia',
        'reporte'
    ];

    public function estrategia()
    {
        return $this->belongsTo(Estrategia::class, 'id_estrategia');
    }
}
