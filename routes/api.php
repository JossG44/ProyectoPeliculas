<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/peliculas', 'App\Http\Controllers\ApiController@indexPeliculas');
Route::get('/alquilers', 'App\Http\Controllers\ApiController@indexAlquilers');
Route::get('/socios', 'App\Http\Controllers\ApiController@indexSocios');
Route::get('/directors', 'App\Http\Controllers\ApiController@indexDirectors');
Route::get('/generos', 'App\Http\Controllers\ApiController@indexGeneros');
