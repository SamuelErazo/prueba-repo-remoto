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

Route::get('/', function () {
    return view('welcome');
});

Route:: get('ejercicio', function(){
    return view('bienvenido');
});

Route:: get('terremot', function(){
    return view('earthquake');
});

Route::get('grafica_cristhian', function(){
    return view('grafica_cristhian');
});
Route::get('pruebaxuno', function(){
    return view('pruebax');
});
Route::get('sensor2', function(){
    return view('vista');
});
