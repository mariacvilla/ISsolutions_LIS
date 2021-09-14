<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\CalidadController;
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

Route::get('/', HomeController::class);
Route::POST('resultados', 'App\Http\Controllers\ResultadosController@store');
Route::resource('patients', 'App\Http\Controllers\PatientController');
Route::resource('calidad', 'App\Http\Controllers\CalidadController');