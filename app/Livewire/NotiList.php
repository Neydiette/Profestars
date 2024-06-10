<?php

namespace App\Livewire;

use App\Models\Notificacion;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotiList extends Component
{
    public $selectedNoti;
    public $notificaciones;
    public $notiVista;

    public function verNoti($notiId)
    {
        $this->selectedNoti = true;
        $Noti = Notificacion::findOrFail($notiId);
        $this->notiVista = $Noti;
        $Noti->visto = true;
        $Noti->save();
    }

    public function eliminarNoti($id)
    {
        $notificacion = Notificacion::find($id);
        $notificacion->delete();
    }
    public function cerrarNoti()
    {
        $this->selectedNoti = '';
    }
    public function render()
    {
        $user = Auth::user();
        if ($user) {
            $this->notificaciones = Notificacion::where('id_usuario', $user->id)->get();
        }
        return view('livewire.noti-list');
    }
}
