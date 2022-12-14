<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('landing');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/lore', function () {
    return view('lore');
});

Route::get('/gameplay', function () {
    return view('gameplay');
});

Route::get('/gamemode', function () {
    return view('gamemode');
});

Route::get('/levels', function () {
    return view('levels');
});

Route::get('/heroes/lancet', function () {
    return view('hero1');
});

Route::get('/heroes/signe', function () {
    return view('hero2');
});

Route::get('/heroes/giannis', function () {
    return view('hero3');
});

Route::get('/heroes/ezra', function () {
    return view('hero4');
});

Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/registeruser',[AuthController::class,'registeruser'])->name ('registeruser');
Route::post('/loginuser',[AuthController::class,'loginuser'])->name ('loginuser');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/landing', [AuthController::class, 'landing'])->name('landing');
