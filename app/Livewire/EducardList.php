<?php

namespace App\Livewire;

use App\Models\Favorito;
use App\Models\Profesor;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EducardList extends Component
{
    public $profesores;
    public $favoritos = [];

    public function redirectToMyRoute($profesorId)
    {
        return redirect()->to('educard/' . $profesorId);
    }

    public function agregarFavorito($id)
    {
        $favorito = Favorito::where('id_usuario', Auth::id())
            ->where('id_profesor', $id)
            ->first();

        if ($favorito) {
            $favorito->delete();
        } else {
            Favorito::create([
                'id_usuario' => Auth::id(),
                'id_profesor' => $id,
            ]);
        }
    }
    public function render()
    {
        $this->profesores = Profesor::all();
        $this->favoritos = Favorito::where('id_usuario', Auth::id())->pluck('id_profesor')->toArray();
        return view('livewire.educard-list');
    }
}
