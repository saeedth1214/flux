<?php


use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Livewire\Login;
use Modules\Auth\Http\Livewire\Register;

Route::get('/auth/login', Login::class);
Route::get('/auth/register', Register::class);
