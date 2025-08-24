<?php

use Illuminate\Support\Facades\Route;
use Themes\Fluxone\Livewire\Modules\Auth\Login;
use Themes\Fluxone\Livewire\Modules\Auth\Register;

Route::prefix('auth/')->as('auth.')->group(function ($route) {
    $route->get('login', Login::class)->name('login');
    $route->get('register', Register::class)->name('register');
});
