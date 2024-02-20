<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;

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

Route::controller(ClientController::class)->group(function(){
    Route::get("/clientes", 'index');
    Route::get("/clientes/create", 'create');
    Route::get("/clientes/show/{id}",'show');
    Route::get("/clientes/edit/{id}", 'edit');
    Route::get("/clientes/delete/{id}", 'delete');
});

Route::resource('/productos', ProductController::class);

Route::controller(AccountController::class)->group(function(){
    Route::get("/cuentas", 'index')->name('cuentas.index');
    Route::get("/cuentas/create", 'create')->name('cuentas.create');
    Route::get("/cuentas/show/{id}",'show')->name('cuentas.show');
    Route::get("/cuentas/update/{id}", 'update')->name('cuentas.update');
    Route::get("/cuentas/edit/{id}", 'edit')->name('cuentas.edit');
    Route::get("/cuentas/delete/{id}", 'delete')->name('cuentas.delete');
});