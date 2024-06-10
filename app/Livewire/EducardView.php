<?php

namespace App\Livewire;

use App\Models\Elemento;
use App\Models\Profesor;
use Livewire\Component;

class EducardView extends Component
{
    public $educard;
    public $modal;
    public $activeTab = 'emotes';
    public $elementos;

    public function selectTab($tab)
    {
        $this->activeTab = $tab;
    }
    public function openModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }

    public function mount($id)
    {
        $this->educard = Profesor::find($id);
        $this->elementos = Elemento::where('id_profesor', $id)->get();
    }
    public function render()
    {
        return view('livewire.educard-view');
        
    }
}
