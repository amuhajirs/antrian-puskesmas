<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginModal extends Component{
    public $username;
    public $password;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render(){
        return view('livewire.login-modal');
    }

    public function updated($field){
        $this->validateOnly($field, [
            'username'=>'required',
            'password'=>'required',
        ]);
    }

    public function authenticate(){
        $credentials = $this->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        if(Auth::guard('web')->attempt($credentials)) {
            session()->regenerate();
            return redirect('/')->with('loginSuccess', 'Login Berhasil');
        }

        $this->addError('loginFailed', 'The provided credentials do not match our records.');
        $this->emit('refreshComponent');
        $this->username = '';
        $this->password = '';
    }
}
