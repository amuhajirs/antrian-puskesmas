<?php

namespace App\Http\Livewire;

use App\Models\Antrian;
use App\Models\Poli;
use Livewire\Component;

class HeroLogin extends Component{
    protected $listeners = ['antrianAdded' => '$refresh'];

    public function render(){
        $antrian_sekarang = Antrian::pluck('no_antrian')->count();
        if(!$antrian_sekarang){
            $antrian_sekarang=0;
        }

        $polis = Poli::all();

        return view('livewire.hero-login', [
            'antrian_sekarang'=>$antrian_sekarang,
            'polis'=>$polis,
        ]);
    }
}
