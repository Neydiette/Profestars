<?php

namespace App\Livewire;

use App\Models\Estrategia;
use App\Models\Materia;
use App\Models\Notificacion;
use App\Models\Profesor;
use App\Models\User;
use Livewire\Component;

class GestionEstrategias extends Component
{
    public $estrategias, $usuarios, $profesores, $materias, $isOpen, $openDeleteModal;
    public $estrategia_id, $titulo, $user_id, $profesor_id, $materia_id, $semestre, $estrategia, $etiquetas = [];

    public $showActive = true;

    public function toggleTab($active)
    {
        $this->showActive = $active;
    }
    public function create()
    {
        $this->openModal();
    }

    public function openModal()
    {
        $this->resetInputFields();
        $this->isOpen = true;
    }

    public function resetInputFields()
    {
        $this->estrategia_id = '';
        $this->titulo = '';
        $this->user_id = '';
        $this->profesor_id = '';
        $this->materia_id = '';
        $this->semestre = '';
        $this->estrategia = '';
        $this->etiquetas = [];
    }

    public function store()
    {
        $this->validate([
            'titulo' => 'required',
            'user_id' => 'required',
            'profesor_id' => 'required',
            'materia_id' => 'required',
            'semestre' => 'required',
            'estrategia' => 'required',
        ]);

        $estrategia = Estrategia::find($this->estrategia_id) ?? new Estrategia();
        $estrategia->titulo = $this->titulo;
        $estrategia->user_id = $this->user_id;
        $estrategia->profesor_id = $this->profesor_id;
        $estrategia->materia_id = $this->materia_id;
        $estrategia->semestre = $this->semestre;
        $estrategia->estrategia = $this->estrategia;
        $estrategia->etiquetas = json_encode($this->etiquetas);

        $estrategia->save();

        session()->flash('message', $this->estrategia_id ? 'Estrategia actualizada exitosamente.' : 'Estrategia creada exitosamente.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $estrategia = Estrategia::findOrFail($id);
        $this->estrategia_id = $id;
        $this->titulo = $estrategia->titulo;
        $this->user_id = $estrategia->user_id;
        $this->profesor_id = $estrategia->profesor_id;
        $this->materia_id = $estrategia->materia_id;
        $this->semestre = $estrategia->semestre;
        $this->estrategia = $estrategia->estrategia;
        $this->etiquetas = json_decode($estrategia->etiquetas);

        $this->isOpen = true;
    }

    public function confirmDelete($id)
    {
        $this->estrategia_id = $id;
        $this->openDeleteModal = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->estrategia_id = '';
        $this->openDeleteModal = false;
    }

    public function delete()
    {
        Estrategia::find($this->estrategia_id)->delete();
        session()->flash('message', 'Estrategia eliminada exitosamente.');
        $this->openDeleteModal = false;
    }

    public function validada($id)
    {
        $estrategia = Estrategia::findOrFail($id);

        Notificacion::create([
            'estrategia' =>  $estrategia->titulo,
            'id_usuario' =>  $estrategia->user_id,
            'tipo' => 1,
            'visto' => 0,
        ]);

        $estrategia->update([
            'estado' => 1,
        ]);
    }
    public function declinar()
    {
        $estrategia = Estrategia::findOrFail($this->estrategia_id);

        Notificacion::create([
            'estrategia' =>  $estrategia->titulo,
            'id_usuario' =>  $estrategia->user_id,
            'tipo' => 2,
            'visto' => 0,
        ]);

        $estrategia->delete();
        $this->openDeleteModal = false;
    }

    public function render()
    {
        $this->estrategias = $this->showActive
            ? Estrategia::where('estado', true)->get()
            : Estrategia::where('estado', false)->get();
        $this->usuarios = User::all();
        $this->profesores = Profesor::all();
        $this->materias = Materia::all();
        return view('livewire.gestion-estrategias');
    }
}
