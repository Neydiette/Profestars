<?php

namespace App\Livewire;

use App\Models\Materia;
use App\Models\Profesor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class GestionProfesores extends Component
{
    use WithFileUploads;

    public $profesores, $isOpen, $openDeleteModal;
    public $titulo, $nombre, $frase, $imagen1, $imagen2, $correo, $nivel, $rango, $copas, $semestres = [];
    public $dificultad, $reprobacion = 0, $paciencia = 0, $caracter = 0, $skills = [], $clases = [];
    public $materias;
    public $profe_id;
    public $horarios = [];
    public $horario_lunes = ['inicio' => '', 'fin' => ''];
    public $horario_martes = ['inicio' => '', 'fin' => ''];
    public $horario_miercoles = ['inicio' => '', 'fin' => ''];
    public $horario_jueves = ['inicio' => '', 'fin' => ''];
    public $horario_viernes = ['inicio' => '', 'fin' => ''];

    public function updated($propertyName)
    {

        if (str_starts_with($propertyName, 'horario_')) {
            $this->updateHorarios();
        }
    }


    private function updateHorarios()
    {
        $dias = [
            'Lunes' => $this->horario_lunes,
            'Martes' => $this->horario_martes,
            'Miércoles' => $this->horario_miercoles,
            'Jueves' => $this->horario_jueves,
            'Viernes' => $this->horario_viernes,
        ];

        $this->horarios = [];

        foreach ($dias as $dia => $horario) {
            if ($horario['inicio'] && $horario['fin']) {
                $this->horarios[] = "{$dia} de {$horario['inicio']} a {$horario['fin']}";
            }
        }
    }

    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);


        $this->profe_id = $id;
        $this->titulo = $profesor->titulo;
        $this->nombre = $profesor->nombre_completo;
        $this->frase = $profesor->frase;
        $this->correo = $profesor->correo;
        $this->nivel = $profesor->nivel;
        $this->rango = $profesor->rango;
        $this->copas = $profesor->copas;
        $this->semestres = $profesor->semestres;
        $this->dificultad = $profesor->dificultad;
        $this->reprobacion = $profesor->reprobacion;
        $this->paciencia = $profesor->paciencia;
        $this->caracter = $profesor->caracter;
        $this->horarios = $profesor->horarios;
        foreach ($profesor->horarios as $horario) {
            $parts = explode(' ', $horario);
            $dia = $parts[0];
            $inicio = $parts[2];
            $fin = $parts[4];

            switch ($dia) {
                case 'Lunes':
                    $this->horario_lunes['inicio'] = $inicio;
                    $this->horario_lunes['fin'] = $fin;
                    break;
                case 'Martes':
                    $this->horario_martes['inicio'] = $inicio;
                    $this->horario_martes['fin'] = $fin;
                    break;
            }
        }
        $this->skills = $profesor->skills;
        $this->clases = $profesor->clases;
        $this->imagen1 = $profesor->imagen1;
        $this->imagen2 = $profesor->imagen2;
        $this->clases = array_values(array_filter($this->clases));
        $this->skills = array_values(array_filter($this->skills));
        $this->isOpen = true;
    }


    public function store()
    {
        $this->validate([
            'titulo' => 'required',
            'nombre' => 'required',
            'frase' => 'required',
            'correo' => 'required',
            'nivel' => 'required',
            'rango' => 'required',
            'copas' => 'required',
            'semestres' => 'required',
            'dificultad' => 'required',
            'reprobacion' => 'required',
            'paciencia' => 'required',
            'caracter' => 'required',
            'horarios' => 'required',
            'skills' => 'required',
            'clases' => 'required',
        ]);
        $profesor = Profesor::find($this->profe_id);
        $imagenPath1 = $this->imagen1 instanceof \Illuminate\Http\UploadedFile
            ? 'storage/' . $this->imagen1->storeAs('profesores', $this->imagen1->getClientOriginalName())
            : ($profesor->imagen1 ?? null);
        $imagenPath2 = $this->imagen2 instanceof \Illuminate\Http\UploadedFile
            ? 'storage/' . $this->imagen2->storeAs('profesores', $this->imagen2->getClientOriginalName())
            : ($profesor->imagen2 ?? null);

        $this->clases = array_values(array_filter($this->clases));
        $this->skills = array_values(array_filter($this->skills));

        $profesor = Profesor::find($this->profe_id) ?? new Profesor;


        $profesor->titulo = $this->titulo;
        $profesor->nombre_completo = $this->nombre;
        $profesor->frase = $this->frase;
        $profesor->correo = $this->correo;
        $profesor->nivel = $this->nivel;
        $profesor->rango = $this->rango;
        $profesor->copas = $this->copas;
        $profesor->semestres = $this->semestres;
        $profesor->dificultad = $this->dificultad;
        $profesor->reprobacion = $this->reprobacion;
        $profesor->paciencia = $this->paciencia;
        $profesor->caracter = $this->caracter;
        $profesor->horarios = $this->horarios;
        $profesor->skills = $this->skills;
        $profesor->clases = $this->clases;
        $profesor->imagen1 = $imagenPath1;
        $profesor->imagen2 = $imagenPath2;
        $profesor->save();

        session()->flash('message', $this->profe_id ? 'Profesor actualizado exitosamente.' : 'Profesor creado exitosamente.');

        $this->closeModal();
        $this->resetFields();
    }



    public function create()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->resetFields();
        $this->isOpen = false;
    }
    public function resetFields()
    {
        $this->titulo = '';
        $this->nombre = '';
        $this->frase = '';
        $this->imagen1 = '';
        $this->imagen2 = '';
        $this->correo = '';
        $this->nivel = null;
        $this->rango = null;
        $this->copas = null;
        $this->semestres = [];
        $this->dificultad = null;
        $this->reprobacion = 0;
        $this->paciencia = 0;
        $this->caracter = 0;
        $this->horarios = [];
        $this->skills = [];
        $this->clases = [];
        $this->profe_id = null;
    }
    public function render()
    {
        $this->profesores = Profesor::all();
        $this->materias = Materia::all();
        return view('livewire.gestion-profesores');
    }
}
