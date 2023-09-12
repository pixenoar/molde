<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Site\Home\Home;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dash\Dashboard;
use App\Http\Livewire\Dash\Perfil;



// SITE

Route::get('/', Home::class)->name('home');

// AUTH

Route::get('login', Login::class)->middleware('guest')->name('login');

// DASH

Route::middleware(['auth'])->prefix('in')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('in-dashboard');
    Route::get('perfil', Perfil::class)->name('in-perfil');
});