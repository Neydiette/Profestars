<?php

namespace App\Http\Controllers;

use App\Models\Estrategia;
use Illuminate\Http\Request;

class EstrategiaController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('limit', 5); 
        return Estrategia::paginate($perPage);
    }

    public function show($id)
    {
        $estrategia = Estrategia::with('profesor', 'materia', 'user')->findOrFail($id);
        return response()->json($estrategia);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'titulo' => 'required|string',
            'profesor_id' => 'required|exists:profesors,id',
            'materia_id' => 'required|exists:materias,id',
            'semestre' => 'required|string',
            'estrategia' => 'required|string',
            'etiquetas' => 'nullable|array', 
        ]);

        
        $estrategia = new Estrategia();
        $estrategia->user_id = $request->user_id; 
        $estrategia->titulo = $request->titulo;
        $estrategia->profesor_id = $request->profesor_id;
        $estrategia->materia_id = $request->materia_id;
        $estrategia->semestre = $request->semestre;
        $estrategia->estrategia = $request->estrategia;
        $estrategia->etiquetas = json_encode($request->etiquetas);
        
        $estrategia->estado = false; 
        $estrategia->like = 0; 
        $estrategia->dislike = 0; 

        
        $estrategia->save();

        
        return response()->json(['message' => 'Estrategia creada correctamente'], 201);
    }
}
