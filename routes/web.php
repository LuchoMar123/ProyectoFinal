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
});

Route::get('/consulta', function () {
    return view('paises/show');
});

Route::resource('paises', 'App\Http\Controllers\CbPaisesController');
Route::resource('representantes', 'App\Http\Controllers\CbRepresentantesController');
Route::resource('relaciones', 'App\Http\Controllers\CbRelacionesController');
Route::resource('exportaciones', 'App\Http\Controllers\CbExportacionesController');
