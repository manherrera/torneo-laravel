<?php

namespace App\Http\Livewire;
use App\Models\G2llo;
use App\Models\Participante;
use App\Models\Clonparticipante;
use Livewire\Component;

class Gallo2Component extends Component
{
    public $g2llos = "";

    public function mount()
    {
        $this->g2llos = G2llo::where("equipo_id", 0)->get();
    }

    public function render()
    {
        return view('livewire.gallo2-component', [
            "participantes" => Participante::all(),
            "clonparticipantes" => Clonparticipante::all(),
            "g2llos" => $this->g2llos
        ]);
    }

    public function listarG2llos($equipo_id)
    {
        $this->g2llos = G2llo::where("equipo_id", "=" ,$equipo_id)->get();
    }
}