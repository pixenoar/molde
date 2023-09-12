<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider{

    public function register(){
        //
    }

    public function boot(){
        Carbon::setLocale('es');
        Carbon::setUTF8('true');
        setlocale(LC_TIME, 'Spanish');
        
    }

}
