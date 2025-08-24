<?php

use Illuminate\Support\Facades\Route;
use Themes\Fluxone\Livewire\Modules\Dashboard\Dashboard;
use Themes\Fluxone\Livewire\Modules\Dashboard\First;
use Themes\Fluxone\Livewire\Modules\Dashboard\Second;

Route::get('/dashboard', Dashboard::class);
Route::get('/first-page', First::class);
Route::get('/second-page', Second::class);
