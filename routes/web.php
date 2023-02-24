<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/login', function () {return view('auth.login');})->name('login');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::post('/register_process', 'App\Http\Controllers\AuthController1@register'::class)->name('register_process');

use App\Http\Controllers\Auth;
