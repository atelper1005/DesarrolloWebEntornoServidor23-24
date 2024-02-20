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

Route::get('/test', function () {
    return view('<h1>Antonio Jesús Téllez Perdigones - 2ºDAW - Prueba</h1>');
});

Route::get('/api/user', function () {
    return view('<h1>Peter Chen creó el Modelo Entidad Relación</h1>');
});

Route::get('/user/view/{id?}', function ($id=null) {
    return "Hola número {$id}";
});

Route::get('/user/{nombre}/{apellidos}', function ($nombre, $apellidos) {
    return "Nombre alumno: {$nombre}, Apellidos alumno: {$apellidos}";
});


Route::get('/user/{apellido}/{id?}', function ($apellido, $id=null) {
    return "Apellido: {$apellido} y ID: {$id}";
});