<?php

namespace App\Http\Livewire\Site\Home;

use Livewire\Component;



class Home extends Component{

    public function render(){
        return view('livewire.site.home.home')->layout('layouts.site');
    }

}
