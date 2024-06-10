<?php

namespace App\Livewire;

use App\Models\Estrategia;
use App\Models\Like;
use App\Models\Reporte;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CofreEstrategias extends Component
{
    public $estrategias;
    public $search = '';
    public $showNoResults;
    public $user;
    public $modalReport = false;
    public $selectedEstrategia;
    public $razon;
    public $razonOtro;

    public $savedReport;
    protected $listeners = ['resetNoti' => 'resetSavedReport'];

    public function updateRazon()
    {
        $this->razon = $this->razonOtro;
    }
    public function mount()
    { 
        $this->user = Auth::user();
        $this->applySearch();
    }  
    public function toggleReaction($estrategiaId, $reaction)
    {
        $estrategia = Estrategia::findOrFail($estrategiaId);
        $existingReaction = Like::where('id_estrategia', $estrategiaId)
            ->where('id_usuario', $this->user->id)
            ->first();

        if ($existingReaction) {
            $existingReactionValue = $existingReaction->reaccion == 1 ? true : false;
            if ($existingReactionValue === $reaction) {
                $existingReaction->delete();
                if ($reaction) {
                    $estrategia->like -= 1;
                } else {
                    $estrategia->dislike -= 1;
                }
            } else {
                $existingReaction->reaccion = $reaction ? 1 : 0;
                $existingReaction->save();
                if ($existingReactionValue) {
                    $estrategia->like -= 1;
                } else {
                    $estrategia->dislike -= 1;
                }
                if ($reaction) {
                    $estrategia->like += 1;
                } else {
                    $estrategia->dislike += 1;
                }
            }
        } else {
            Like::create([
                'id_estrategia' => $estrategiaId,
                'id_usuario' => $this->user->id,
                'reaccion' => $reaction,
            ]);
            if ($reaction) {
                $estrategia->like += 1;
            } else {
                $estrategia->dislike += 1;
            }
        }

        $estrategia->save();
    }
    public function updatedSearch($value)
    {
        $this->search = $value;
        $this->applySearch();
    }

    protected function applySearch()
    {

        $this->estrategias = Estrategia::where('titulo', 'like', '%' . $this->search . '%')
            ->orWhere('estrategia', 'like', '%' . $this->search . '%')
            ->where('estado', true)
            ->get();

        $this->showNoResults = $this->estrategias->isEmpty();
    }

    public function openReport($id)
    {
        $this->selectedEstrategia = $id;
        $this->modalReport = true;
    }
    public function closeReport()
    {
        $this->razon = '';
        $this->razonOtro = '';
        $this->selectedEstrategia = '';
        $this->modalReport = false;
    }

    public function sendReport()
    {
        $reporte = Reporte::where('id_usuario', Auth::id())
            ->where('id_estrategia', $this->selectedEstrategia)
            ->first();

        if ($reporte) {
            $reporte->update([
                'reporte' => $this->razon,
            ]);
        } else {
            Reporte::create([
                'id_usuario' => Auth::id(),
                'id_estrategia' => $this->selectedEstrategia,
                'reporte' => $this->razon,
            ]);
        }
        $this->savedReport = true;
        $this->closeReport();
        $this->dispatch('show-noti');
    }

    public function resetSavedReport()
    {
        $this->savedReport = false;
    }

    public function render()
    {
        return view('livewire.cofre-estrategias');
    }
}
