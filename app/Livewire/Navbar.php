<?php

namespace App\Livewire;

use App\Models\Notificacion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class Navbar extends Component
{
    public $countNoti;
    protected $listeners = ['notificacionVista' => 'updateNotificacionCount'];

    public function mount()
    {
        $this->updateNotificacionCount();
    } 
    public function updateNotificacionCount()
    {
        $usuarioId = Auth::id();

        $this->countNoti = Notificacion::where('id_usuario', $usuarioId)
            ->where('visto', false)
            ->count();
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
