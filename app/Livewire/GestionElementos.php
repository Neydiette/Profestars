<?php

namespace App\Livewire;

use App\Models\Elemento;
use App\Models\Profesor;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GestionElementos extends Component
{
    use WithFileUploads;

    public $elementos;
    public $id_profesor, $tipo = 'emote', $ruta;
    public $modalOpen = false;
    public $isEditMode = false;
    public $openDeleteModal = false;
    public $elementoToDelete;
    public $profesores;
    public $elemento_id;
    public $dato;

    public function openModal()
    {
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->resetInputFields();
        $this->modalOpen = false;
        $this->openDeleteModal = false;
    }

    public function confirmDelete($id)
    {
        $this->elementoToDelete = $id;
        $this->openDeleteModal = true;
    }
    public function delete()
    {
        $elemento = Elemento::findOrFail($this->elementoToDelete);
        if ($elemento) {
            $elemento->delete();
        }
        $this->closeModal();
    }

    public function store()
    {
        $this->validate([
            'id_profesor' => 'required',
            'tipo' => 'required|in:emote,item',
            'ruta' => $this->elemento_id ? 'nullable|image' : 'required|image',
        ]);
    
        if ($this->ruta) {
            $nombreArchivo = $this->ruta->getClientOriginalName(); 
            $path = $this->ruta->storeAs('elementos', $nombreArchivo);
        }
    
        if ($this->elemento_id) {
            $elemento = Elemento::find($this->elemento_id);
            $elemento->update([
                'id_profesor' => $this->id_profesor,
                'tipo' => $this->tipo,
                'ruta' => $this->ruta ? $path : $elemento->ruta,
                'dato' =>  $this->dato,
            ]);
        } else {
            Elemento::create([
                'id_profesor' => $this->id_profesor,
                'tipo' => $this->tipo,
                'ruta' => $path,
                'dato' => $this->dato,
            ]);
        }
    
        $this->resetInputFields();
        $this->closeModal();
    }
    
    private function resetInputFields()
    {
        $this->id_profesor = '';
        $this->tipo = '';
        $this->ruta = null;
        $this->elemento_id = null;
        $this->dato = '';
    }

    public function edit($id)
    {
        $elemento = Elemento::find($id);
        $this->id_profesor = $elemento->id_profesor;
        $this->tipo = $elemento->tipo;
        $this->ruta = null;
        $this->elemento_id = $elemento->id;
        $this->dato = $elemento->dato;

        $this->openModal();
    }

    public function render()
    {
        $this->elementos = Elemento::all();
        $this->profesores = Profesor::all();
        $this->tipo;
        return view('livewire.gestion-elementos');
    }
}
