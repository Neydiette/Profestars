<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\anuncio as anuncioModel;

class anuncio extends Component
{
    public $anuncio;
    public function mount($id)
    {
        $this->anuncio = anuncioModel::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.anuncio');
    }
}
