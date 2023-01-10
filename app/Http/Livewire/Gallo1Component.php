<?php

namespace App\Http\Livewire;
use App\Models\G1llo;
use App\Models\Participante;
use App\Models\Clonparticipante;
use Livewire\Component;

class Gallo1Component extends Component
{
    public $g1llos = "";

    public function mount()
    {
        $this->g1llos = G1llo::where("equipo_id", 0)->get();
    }

    public function render()
    {
        return view('livewire.gallo1-component', [
            "participantes" => Participante::all(),
            "clonparticipantes" => Clonparticipante::all(),
            "g1llos" => $this->g1llos
        ]);
    }

    public function listarG1llos($equipo_id)
    {
        $this->g1llos = G1llo::where("equipo_id", "=" ,$equipo_id)->get();
    }
}