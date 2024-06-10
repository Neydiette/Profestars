<?php

namespace App\Livewire;

use App\Models\Estrategia;
use App\Models\Reporte;
use Livewire\Component;

class GestionReportes extends Component
{
    public $reportes;
    public $modalDetails = false;
    public $modalConfirm = false;
    public $estrategia;
    public $selectedReporte;

    public function showDetails($idEstrategia, $idReporte)
    {
        $this->estrategia = Estrategia::find($idEstrategia);
        $this->selectedReporte = Reporte::find($idReporte);
        $this->modalDetails = true;
    }
    
    public function closeDetails()
    {
        $this->modalDetails = false;
    }
    public function closeConfirm()
    {
        $this->modalConfirm = '';
    }
    public function confirmar($opcion)
    {
        $this->modalConfirm = $opcion;
    }

    public function conservarEstrategia()
    {
        $this->selectedReporte->delete();
        $this->modalConfirm = '';
        $this->modalDetails = false;
    }

    public function eliminarEstrategia()
    {
        $this->selectedReporte->delete();
        $this->estrategia->delete();
        $this->modalConfirm = '';
        $this->modalDetails = false;
    }
    public function render()
    {
        $this->reportes = Reporte::all();
        return view('livewire.gestion-reportes');
    }
}
