<?php

namespace App\Livewire;

use App\Models\Materia;
use Livewire\Component;

class GestionMaterias extends Component
{
    public $materias, $nombre;
    public $openDeleteModal;
    public $selectedMateria;
    public $isOpen;

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->openDeleteModal = false;
    }

    private function resetInputFields()
    {
        $this->nombre = '';
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        if ($this->selectedMateria) {
            $materia = Materia::find($this->selectedMateria);
            $materia->nombre = $this->nombre;
            $materia->save();
        } else {
            $materia = Materia::create([
                'nombre' => $this->nombre,
            ]);
        }
        session()->flash(
            'message',
            $this->selectedMateria ? 'materia actualizada exitosamente.' : 'Materia creada exitosamente.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        $this->selectedMateria = $id;
        $this->nombre = $materia->nombre;
        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->selectedMateria = $id;
        $this->openDeleteModal = true;
    }
    public function delete()
    {
        Materia::find($this->selectedMateria)->delete();
        $this->closeModal();
    }

    public function render()
    {
        $this->materias = Materia::all();
        return view('livewire.gestion-materias');
    }
}
