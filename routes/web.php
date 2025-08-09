<?php

use App\Livewire\Menu\Dashboard;
use App\Livewire\Menu\FirstPage;
use App\Livewire\Menu\SecondPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'login';
})->name('login');


Route::get('/register', function () {
    return 'register';
})->name('register');


Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/first-page', FirstPage::class)->name('first-page');
Route::get('/second-page', SecondPage::class)->name('second-page');
