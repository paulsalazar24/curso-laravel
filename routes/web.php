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

Route::get('/', 'MoñoController@index')->name('main');

Route::get('/web.php', 'MoñoController@index')->name('web.php.index');


Route::get('/prueba', 'LuisController@index')->name('pueba.index');

Route::get('/prueba2', function () {
    return 'hola desde mi ruta prueba2';
});

Route::get('/products', 'ProductController@index');

Route::get('/products/{product}', 'ProductController@show');

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

Route::get('productos', function () {
    return 'cuesta mucgo las verduras';
})->name('productos.index');

Route::get('productos1/{produc}', function ($produc) {
    return "cuentame cuanto cuesta {$produc}";
})->name('produc.indesx');