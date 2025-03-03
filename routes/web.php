<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
//Route::view('/testhome', 'home');
Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});
Route::get('/user', [UserController::class, 'getUser']);
Route::get('/about', [UserController::class, 'aboutUser']);
Route::get('/username/{name}', [UserController::class, 'getUserName']);
Route::get('/adminlogin', [UserController::class, 'adminLogin']);

Route::view('/user-form', 'user-form');
Route::post('/adduser', [UserController::class, 'addUser']);
