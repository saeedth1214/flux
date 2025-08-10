<?php

use Modules\UI\Http\Livewire\Menu\Dashboard;
use Modules\UI\Http\Livewire\Menu\FirstPage;
use Modules\UI\Http\Livewire\Menu\SecondPage;

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/first-page', FirstPage::class)->name('first-page');
Route::get('/second-page', SecondPage::class)->name('second-page');


