<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Poli;

class AmbilAntrian extends Component{
    public $polis;

    public function boot(){
        $this->polis = Poli::all();
    }

    public function render(){
        return view('livewire.ambil-antrian', [
            'polis'=>$this->polis
        ]);
    }

    public function updated($field){
        // dd($field);
    }
}
