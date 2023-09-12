<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Component{

    public $email;
    public $password;
    public $remember;

    public function autenticar(){

        $this->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {

            request()->session()->regenerate();
 
            return redirect()->intended('in/dashboard');

        }

        $this->reset(['email', 'password']);

        session()->flash('credenciales', 'Las credenciales son incorrectas.');

    }

    public function render(){
        return view('livewire.auth.login')->layout('layouts.auth');
    }

}
