<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Poli;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $antrian_sekarang = Antrian::pluck('no_antrian')->max();
        if(!$antrian_sekarang){
            $antrian_sekarang=0;
        }

        $polis = Poli::all();

        return view('home', [
            'antrian_sekarang'=>$antrian_sekarang,
            'polis'=>$polis,
        ]);
    }
}
