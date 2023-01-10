<?php

namespace App\Http\Livewire;
use App\Models\G1llo;
use App\Models\Participante;
use Livewire\Component;

class Gallo1Component extends Component
{
    public $g1llos = "";

    public function mount()
    {
        $this->g1llos = G1llo::where("participante_id", 0)->get();
    }

    public function render()
    {
        return view('livewire.gallo1-component', [
            "participantes" => Participante::all(),
            "g1llos" => $this->g1llos
        ]);
    }

    public function listarG1llos($participante_id)
    {
        $this->g1llos = G1llo::where("participante_id", "=" ,$participante_id)->get();
    }
}