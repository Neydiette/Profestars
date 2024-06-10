<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\anuncio;
use App\Models\Elemento;
use App\Models\Profesor;
use Illuminate\Support\Facades\Auth;

class CrearAnuncio extends Component
{
    public $titulo;
    public $profesores;
    public $profesor;
    public $semestre = 'Primer semestre';
    public $anuncio;
    public $prioridad = null;
    public $emotes = [];
    public $selectedImage = 'emotes/walter-enojado.png';
    public $showError = false;
    public $showSuccess = false;

    public function render()
    {
        $this->emotes = Elemento::where('tipo', 'emote')->take(12)->pluck('ruta')->toArray();

        $this->profesores = Profesor::all();


        if ($this->profesores->isNotEmpty()) {
            $this->profesor = $this->profesores->first()->id;
        }
        return view('livewire.crear-anuncio');
    }


    public function selectImage($imagePath)
    {
        $this->selectedImage = $imagePath;
    }

    public function submitForm()
    {

        $this->validate([
            'titulo' => 'required',
            'profesor' => 'required',
            'anuncio' => 'required',
            'semestre' => 'required',
            'prioridad' => 'required',
        ]);


        $nuevoanuncio = new anuncio();
        $nuevoanuncio->user_id = Auth::id();
        $nuevoanuncio->titulo = $this->titulo;
        $nuevoanuncio->profesor_id = $this->profesor;
        $nuevoanuncio->anuncio = $this->anuncio;
        $nuevoanuncio->imagen_path = $this->selectedImage;
        $nuevoanuncio->semestre = $this->semestre;
        $nuevoanuncio->prioridad = $this->prioridad;


        $nuevoanuncio->save();



        $this->reset(['titulo', 'anuncio', 'semestre', 'prioridad']);

        $this->selectedImage = 'emotes/feliz.png';
        $this->prioridad = null;
        if ($this->profesores->isNotEmpty()) {
            $this->profesor = $this->profesores->first()->titulo;
        }
        $this->selectedImage = 'emotes/feliz.png';
        $this->showSuccess = true;
        session()->flash('success', '¡anuncio guardado con éxito!');
    }
    public function updated($field)
    {

        $this->resetErrorBag();
        $this->showError = false;
        $this->showSuccess = false;
    }
}
