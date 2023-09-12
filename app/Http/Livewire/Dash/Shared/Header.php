<?php

namespace App\Http\Livewire\Dash\Shared;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Header extends Component{

    public function logout(){
        
        Auth::guard('web')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');

    }

    public function render(){
        return view('livewire.dash.shared.header');
    }

}
