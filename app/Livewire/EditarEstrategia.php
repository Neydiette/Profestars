<?php

namespace App\Livewire;

use App\Models\Estrategia;
use App\Models\Materia;
use App\Models\Profesor;
use Livewire\Component;

class EditarEstrategia extends Component
{
    public $estrategia;
    public $titulo;
    public $semestre;
    public $estrategia_text;
    public $profesor;
    public $materia;
    public $etiquetas = [];
    public $profesores;
    public $materias;

    public function mount($id)
    {
        $this->estrategia = Estrategia::findOrFail($id);
        $this->titulo = $this->estrategia->titulo;
        $this->semestre = $this->estrategia->semestre;
        $this->estrategia_text = $this->estrategia->estrategia;
        $this->profesor = $this->estrategia->profesor_id;
        $this->materia = $this->estrategia->materia_id;
        $this->etiquetas = json_decode($this->estrategia->etiquetas, true) ?? [];
    }

    public function submitForm()
    {
        $this->estrategia->update([
            'titulo' => $this->titulo,
            'semestre' => $this->semestre,
            'estrategia' => $this->estrategia_text,
            'profesor_id' => $this->profesor,
            'materia_id' => $this->materia,
            'etiquetas' => json_encode($this->etiquetas),
        ]);

        session()->flash('success', 'Estrategia actualizada exitosamente.');
    }
    public function render()
    {
        $this->profesores = Profesor::all();
        $this->materias = Materia::all();
        return view('livewire.editar-estrategia');
    }
}
