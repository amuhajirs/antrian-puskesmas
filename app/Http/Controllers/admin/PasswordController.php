<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class PasswordController extends Controller{
    public function index(){
        return view('admin.password-admin', [
            'title'=>'Dashboard',
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'current_password'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
        ]);

        if(Hash::check($request->password, auth('admin')->user()->password)){
            Admin::where('id', auth('admin')->user()->id)
            ->update([
                'password' => bcrypt($request->password)
            ]);

            return back();
        } else{
            return back()->withErrors('');
        }
    }
}
