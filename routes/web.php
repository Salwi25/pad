<?php

use App\Http\Controllers\CivitasController;
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

Route::get('/', function () {
    return view('layout.home');
});

Route::get('/home', function () {
    return view('layout.main');
});
Route::get('/civitas/add', function () {
    return view('civitas.formadd');
});
Route::get('/navbar', function(){
    return view('layout.navbar');
});
Route::get('/login', function(){
    return view('layout.login');
});
Route::get('/register', function(){
    return view('layout.register');
});
Route::get('/reset_password', function(){
    return view('layout.reset_password');
});
Route::resource('civitas',CivitasController::class);