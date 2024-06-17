<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimaController;
use App\Http\Controllers\historialController;
use App\Http\Controllers\pantallaDosController;
use App\Http\Controllers\pantallaTresController;
use App\Http\Controllers\pantallaUnoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [pantallaUnoController::class, 'index'])->name('/');
// Route::get('/', [ClimaController::class, 'index'])->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//pantalla 1
Route::get('/obtenerCiudades/{idPais}', [pantallaUnoController::class, 'obtenerCiudades'])->name('obtenerCiudades');
Route::post('/pantallaUno/store', [pantallaUnoController::class, 'store'])->name('pantallaUno.store');


//pantalla 2
Route::post('/pantallaDos/store', [pantallaDosController::class, 'store'])->name('pantallaDos.store');


//pantalla 3
Route::get('/pantallaTres/index', [pantallaTresController::class, 'index'])->name('pantallaTres.index');


//historial
Route::post('/hisorial/redirigir', [historialController::class, 'index'])->name('redirigir.historial');


