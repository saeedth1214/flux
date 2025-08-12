<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Livewire\Login;

Route::get('/auth/login', Login::class);
