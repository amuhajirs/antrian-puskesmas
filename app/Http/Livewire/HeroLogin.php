<?php

namespace App\Http\Livewire;

use App\Models\Antrian;
use App\Models\Poli;
use Livewire\Component;

class HeroLogin extends Component{
    public $antrian_sekarang;
    public $polis;
    public $antrian_anda;
    protected $listeners = ['antrianAdded' => '$refresh'];

    public function render(){
        $this->antrian_sekarang = Antrian::pluck('no_antrian')->count();
        if(!$this->antrian_sekarang){
            $this->antrian_sekarang=0;
        }
        $this->polis = Poli::all();
        $this->antrian_anda = Antrian::where('pasien_id', auth('web')->user()->id)->orderBy('created_at', 'DESC')->first();

        return view('livewire.hero-login');
    }
}
