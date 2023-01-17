<?php

namespace App\Http\Livewire;
use App\Models\G5llo;
use App\Models\Participante;
use App\Models\Clonparticipante;
use Livewire\Component;

class Gallo5Component extends Component
{
    public $g5llos = "";

    public function mount()
    {
        $this->g5llos = G5llo::where("equipo_id", 0)->get();
    }

    public function render()
    {
        return view('livewire.gallo5-component', [
            "participantes" => Participante::all(),
            "clonparticipantes" => Clonparticipante::all(),
            "g5llos" => $this->g5llos
        ]);
    }

    public function listarG5llos($equipo_id)
    {
        $this->g5llos = G5llo::where("equipo_id", "=" ,$equipo_id)->get();
    }
}