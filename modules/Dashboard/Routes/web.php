<?php

use Illuminate\Support\Facades\Route;
use Themes\FluxOne\Livewire\Modules\Dashboard\Dashboard;
use Themes\FluxOne\Livewire\Modules\Dashboard\First;
use Themes\FluxOne\Livewire\Modules\Dashboard\Second;

Route::get('/dashboard', Dashboard::class);
Route::get('/first-page', First::class);
Route::get('/second-page', Second::class);
