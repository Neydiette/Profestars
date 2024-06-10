<?php

namespace App\Livewire;

use App\Models\Estrategia;
use App\Models\Materia;
use App\Models\Profesor;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CrearEstrategia extends Component
{
    public $titulo;
    public $profesores;
    public $profesor;
    public $materias;
    public $materia;
    public $semestre = 'Primer semestre';
    public $estrategia;
    public $etiquetas = [];
    public $showError = false;
    public $showSuccess = false;

    public function mount()
    {

        $this->profesores = Profesor::all();
        $this->materias = Materia::all();
        
        if ($this->profesores->isNotEmpty()) {
            $this->profesor = $this->profesores->first()->id;
        }
    }

    public function submitForm()
    {
        
        $this->validate([
            'titulo' => 'required',
            'profesor' => 'required',
            'materia' => 'required',
            'estrategia' => 'required',
            'semestre' => 'required',
            'etiquetas' => 'required',
        ]);

        
        $nuevaEstrategia = new Estrategia();
        $nuevaEstrategia->user_id = Auth::id();
        $nuevaEstrategia->titulo = $this->titulo;
        $nuevaEstrategia->materia_id = $this->materia;
        $nuevaEstrategia->profesor_id = $this->profesor;
        $nuevaEstrategia->estrategia = $this->estrategia;
        $nuevaEstrategia->semestre = $this->semestre;
        $nuevaEstrategia->etiquetas = json_encode($this->etiquetas);

        
        $nuevaEstrategia->save();


        
        $this->reset(['titulo', 'estrategia', 'semestre', 'etiquetas', 'materia']);
        $this->etiquetas = [];
        if ($this->profesores->isNotEmpty()) {
            $this->profesor = $this->profesores->first()->titulo;
        }
        if ($this->materias->isNotEmpty()) {
            $this->materia = $this->materias->first()->nombre;
        }
        $this->showSuccess = true;
        session()->flash('success', '¡estrategia guardada con éxito!');
    }
    public function updated($field)
    {
        
        $this->resetErrorBag();
        $this->showError = false;
        $this->showSuccess = false;
    }
    public function render()
    {
        return view('livewire.crear-estrategia');
    }
}
