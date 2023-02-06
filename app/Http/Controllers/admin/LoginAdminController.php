<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller{
    public function index(){
        return view('admin.login-admin');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }
    }
}
