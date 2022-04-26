<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
Route::post('/register', 'API\RegisterController@store');
Route::post('/login', 'API\LoginController');
// });
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->group(function () {
    Route::get('/user', 'API\UserController');
    Route::post('/logout', 'API\LogoutController');
});
