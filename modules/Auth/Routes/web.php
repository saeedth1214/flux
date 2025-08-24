<?php

use Illuminate\Support\Facades\Route;
use Themes\Fluxone\Livewire\Modules\Auth\Login;
use Themes\Fluxone\Livewire\Modules\Auth\Register;

Route::prefix('auth/')->group(function ($route) {
    $route->get('login', Login::class);
    $route->get('register', Register::class);
});
