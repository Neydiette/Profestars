<?php

namespace App\Livewire;

use App\Models\Elemento;
use Livewire\Component;

class EmotesList extends Component
{
    public $elementos;
    public $currentIndex = 0;
    public $visibleCards = 3;
    public $cardWidth = 464; 

    public function prev()
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
        }
    }

    public function next()
    {
        if ($this->currentIndex < count($this->elementos) - $this->visibleCards) {
            $this->currentIndex++;
        }
    }    

    public function render()
    {
        $this->elementos = Elemento::where('tipo', 'emote')->get();
        return view('livewire.emotes-list');
    }
}
