<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'login';
})->name('login');


Route::get('/register', function () {
    return 'register';
})->name('register');


