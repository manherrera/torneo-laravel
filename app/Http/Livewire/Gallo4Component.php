<?php

namespace App\Http\Livewire;
use App\Models\G4llo;
use App\Models\Participante;
use App\Models\Clonparticipante;
use Livewire\Component;

class Gallo4Component extends Component
{
    public $g4llos = "";

    public function mount()
    {
        $this->g4llos = G4llo::where("equipo_id", 0)->get();
    }

    public function render()
    {
        return view('livewire.gallo4-component', [
            "participantes" => Participante::all(),
            "clonparticipantes" => Clonparticipante::all(),
            "g4llos" => $this->g4llos
        ]);
    }

    public function listarG4llos($equipo_id)
    {
        $this->g4llos = G4llo::where("equipo_id", "=" ,$equipo_id)->get();
    }
}