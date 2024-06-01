<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\EquipoController;

// Ruta principal que carga la vista principal y pasa datos de clientes y marcas
Route::get('/', function () {
    $clientes = app()->make(ClienteController::class)->index();
    $marcas = app()->make(MarcaController::class)->index();
    return view('principal', ['clientes' => $clientes, 'marcas' => $marcas]);
});

// Rutas para los recursos de Clientes
Route::resource('clientes', ClienteController::class);

// Rutas para los recursos de Marcas
Route::resource('marcas', MarcaController::class);

// Rutas para los recursos de Equipos
Route::resource('equipos', EquipoController::class);
