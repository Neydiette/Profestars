<?php

namespace App\Livewire;

use App\Models\Estrategia;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MisEstrategias extends Component
{
    public $estrategias;
    public $estrategiaEliminada = false;
    public $modalDelete = false;
    public $selectedEstrategia;
    public $miestrategia;
    public $modalEstrategia = false;

    protected $listeners = ['resetNoti' => 'resetDelete'];
    public function mount()
    {
        $userId = Auth::id();


        $this->estrategias = Estrategia::where('user_id', $userId)->get();
    }

    public function eliminarEstrategia($id)
    {
        $userId = Auth::id();

        $estrategia = Estrategia::find($id);

        if ($estrategia) {
            $estrategia->delete();
            $this->dispatch('hide-notification');
        }

        $this->estrategias = Estrategia::where('user_id', $userId)->get();
    }

    public function openConfirmDelete($id)
    {
        $this->selectedEstrategia = $id;
        $this->modalDelete = true;
    }
    public function closeConfirmDelete()
    {
        $this->selectedEstrategia = '';
        $this->modalDelete = false;
    }

    public function delete()
    {
        $estrategia = Estrategia::find($this->selectedEstrategia);

        $estrategia->delete();
        $this->estrategiaEliminada = true;
        $this->closeConfirmDelete();
        $this->dispatch('show-noti');
    }
    public function resetDelete()
    {
        $this->estrategiaEliminada = false;
    }

    public function verEstrategia($id)
    {
        $this->miestrategia = Estrategia::find($id);
        $this->modalEstrategia = true;
    }
    public function cerrarEstrategia()
    {
        $this->miestrategia = '';
        $this->modalEstrategia = false;
    }
    public function render()
    {
        return view('livewire.mis-estrategias');
    }
}
