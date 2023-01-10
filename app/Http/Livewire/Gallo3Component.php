<?php

namespace App\Http\Livewire;
use App\Models\G3llo;
use App\Models\Participante;
use App\Models\Clonparticipante;
use Livewire\Component;

class Gallo3Component extends Component
{
    public $g3llos = "";

    public function mount()
    {
        $this->g3llos = G3llo::where("equipo_id", 0)->get();
    }

    public function render()
    {
        return view('livewire.gallo3-component', [
            "participantes" => Participante::all(),
            "clonparticipantes" => Clonparticipante::all(),
            "g3llos" => $this->g3llos
        ]);
    }

    public function listarG3llos($equipo_id)
    {
        $this->g3llos = G3llo::where("equipo_id", "=" ,$equipo_id)->get();
    }
}