<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'id_estrategia',
        'reaccion',
    ];
    public function estrategia()
    {
        return $this->belongsTo(Estrategia::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class); 
    }
}
