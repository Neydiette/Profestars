<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return response()->json($profesores);
    }
}
