<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('main');

Route::get('/prueba', function () {
    return 'hola mundo';
});

Route::get('/prueba2', function () {
    return 'hola desde mi ruta prueba2';
});

Route::get('/prueba3', function () {
    return 'hola desde mi ruta prueba 3';
});

Route::get('/prueba4', function () {
    return 'hola desde mi ruta 4';
});

Route::get('/prueba5', function () {
    return 'hola desde mi prueba 5';
});

Route::get('/prueba6', function () {
    return 'hola desde mi prueba 6';
});
Route::get('/prueba7', function () {
    return ' hola desde mi prueba 7';
});


Route::get('/prueba7', function () {
    return ' hola desde mi prueba 7';
});

Route::get('/prueba8', function () {
    return 'hola desde mi prueba 8';
});

Route::get('/prueba9', function () {
    return 'hola desde mi pprueba 9';
});

Route::get('/prueba10', function () {
    return 'hola desde ,mi prueba 10';
});

Route::get('productos', function () {
    return 'la sala esta sola';
})->name('hola saludos gente');