<?php

namespace App\Http\Livewire\Dash;

use Livewire\Component;



class Dashboard extends Component{

    // RENDER

    public function render(){
        return view('livewire.dash.dashboard')->layout('layouts.dash');
    }

}
