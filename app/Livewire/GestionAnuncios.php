<?php

namespace App\Livewire;

use App\Models\Anuncio;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GestionAnuncios extends Component
{
    public $anuncios, $usuarios, $profesores, $emotes, $isOpen, $openDeleteModal;
    public $anuncio_id, $titulo, $user_id, $profesor_id, $semestre, $anuncio, $imagen_path, $prioridad;

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
        $this->anuncio_id = '';
        $this->titulo = '';
        $this->user_id = '';
        $this->profesor_id = '';
        $this->semestre = '';
        $this->anuncio = '';
        $this->imagen_path = '';
        $this->prioridad = '';
    }

    public function store()
    {
        $this->validate([
            'titulo' => 'required',
            'user_id' => 'required',
            'profesor_id' => 'required',
            'semestre' => 'required',
            'anuncio' => 'required',
            'imagen_path' => 'required',
            'prioridad' => 'required',
        ]);
        
        Anuncio::updateOrCreate(['id' => $this->anuncio_id], [
            'titulo' => $this->titulo,
            'user_id' => $this->user_id,
            'profesor_id' => $this->profesor_id,
            'semestre' => $this->semestre,
            'anuncio' => $this->anuncio,
            'imagen_path' => $this->imagen_path,
            'prioridad' => $this->prioridad,
        ]);

        session()->flash('message', $this->anuncio_id ? 'Anuncio actualizado exitosamente.' : 'Anuncio creado exitosamente.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $anuncio = Anuncio::findOrFail($id);
        $this->anuncio_id = $id;
        $this->titulo = $anuncio->titulo;
        $this->user_id = $anuncio->user_id;
        $this->profesor_id = $anuncio->profesor_id;
        $this->semestre = $anuncio->semestre;
        $this->anuncio = $anuncio->anuncio;
        $this->imagen_path = $anuncio->imagen_path;
        $this->prioridad = $anuncio->prioridad;

        $this->isOpen = true;
    }

    public function confirmDelete($id)
    {
        $this->anuncio_id = $id;
        $this->openDeleteModal = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->openDeleteModal = false;
    }

    public function delete()
    {
        Anuncio::find($this->anuncio_id)->delete();
        session()->flash('message', 'Anuncio eliminado exitosamente.');
        $this->openDeleteModal = false;
    }

    public function selectImage($imagePath)
    {
        $this->imagen_path = $imagePath;
    }
    public function render()
    {
        $this->anuncios = Anuncio::all();
        $this->usuarios = User::all();
        $this->profesores = Profesor::all();
        $this->emotes = Storage::files('emotes');
        return view('livewire.gestion-anuncios');
    }
}
