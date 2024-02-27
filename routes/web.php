<?php

use App\Http\Controllers\TipoAsientoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VueloController;

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
    return view('inicio');
});

Route::get('/asientos/tipo', [TipoAsientoController::class, 'index'])->name('asientos.tipo');
Route::get('/asientos/tipo/agregar', [TipoAsientoController::class, 'agregar'])->name('asientos.agregar');
Route::post('/asientos/tipo/guardar', [TipoAsientoController::class,'guardar'])->name('asientos.guardar');
Route::put('/asientos/tipo/eliminar', [TipoAsientoController::class,'eliminar'])->name('asientos.eliminar');
Route::get('asientos/tipo/editar/{id}', [TipoAsientoController::class,'editar'])->name('asientos.editar');
Route::put('asientos/tipo/editar/guardar', [TipoAsientoController::class,'guardarEdit'])->name('asientos.guardar.edit');

Route::get('/vuelos', [VueloController::class, 'index'])->name('vuelos.index');
Route::get('/vuelos/nuevo', [VueloController::class,'nuevo'])->name('vuelos.nuevo');
Route::post('/vuelos/nuevo/agregar', [VueloController::class,'agregar'])->name('vuelos.agregar');
