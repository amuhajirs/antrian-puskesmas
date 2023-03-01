<?php

namespace App\Http\Controllers;

use App\Models\Antrian;

class HomeController extends Controller
{
    public function index(){
        $antrian_sekarang = Antrian::pluck('no_antrian')->count();
        if(!$antrian_sekarang){
            $antrian_sekarang=0;
        }

        return view('home', [
            'antrian_sekarang'=>$antrian_sekarang,
        ]);
    }
}
