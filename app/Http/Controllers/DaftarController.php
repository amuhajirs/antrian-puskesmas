<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{
    public function daftar(Request $request){
        $request->validate([
            'no_identitas'=>'required|min:16|max:16',
            'nama'=>'required|min:3',
            'jenis_kelamin'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required|min:10',
            'username'=>'required|min:3',
            'password'=>'required',
        ]);

        User::create([
            'no_identitas'=>$request->no_identitas,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
        ]);
        
        return redirect('/')->with('daftarSukses', 'Pendaftaran berhasil, silahkan login!');
    }
}