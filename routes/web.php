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
    return view('home');
});

//Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/reporte1', [App\Http\Controllers\HomeController::class, 'reporte1'])->name('reporte1');
Route::get('/reporte2', [App\Http\Controllers\HomeController::class, 'reporte2'])->name('reporte2');
Route::get('/reporte3', [App\Http\Controllers\HomeController::class, 'reporte3'])->name('reporte3');
Route::get('/reporte4', [App\Http\Controllers\HomeController::class, 'reporte4'])->name('reporte4');
Route::get('/reporte5', [App\Http\Controllers\HomeController::class, 'reporte5'])->name('reporte5');

//Route Hooks - Do not delete//
	Route::view('pelicula', 'livewire.peliculas.index')->middleware('auth');
	Route::view('alquiler', 'livewire.alquilers.index')->middleware('auth');
	Route::view('actor_pelicula', 'livewire.actorpeliculas.index')->middleware('auth');
	Route::view('socio', 'livewire.socios.index')->middleware('auth');
	Route::view('genero', 'livewire.generos.index')->middleware('auth');
	Route::view('formato', 'livewire.formatos.index')->middleware('auth');
	Route::view('director', 'livewire.directors.index')->middleware('auth');
	Route::view('sexo', 'livewire.sexos.index')->middleware('auth');

