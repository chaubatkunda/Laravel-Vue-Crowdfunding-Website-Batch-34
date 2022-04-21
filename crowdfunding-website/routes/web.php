<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();
