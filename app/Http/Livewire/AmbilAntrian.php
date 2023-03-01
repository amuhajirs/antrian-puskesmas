<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Poli;

use App\Models\Antrian;

class AmbilAntrian extends Component{
    public $polis;
    public $poli;
    public $no_antrian='';

    public function mount(){
        $this->polis = Poli::all();
    }

    public function render(){
        return view('livewire.ambil-antrian', [
            'polis'=>$this->polis
        ]);
    }

    public function updated($field){
        if($this->poli){
            $tes = Antrian::where('poli', $this->poli)->pluck('no_antrian')->max();
            $this->no_antrian = $tes + 1;
        } else{
            $this->no_antrian = '';
        }
    }
}
