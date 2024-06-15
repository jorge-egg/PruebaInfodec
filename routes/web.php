<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimaController;
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
Route::get('/search', [ClimaController::class, 'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//pantalla 1
Route::get('/obtenerCiudades/{idPais}', [pantallaUnoController::class, 'obtenerCiudades'])->name('obtenerCiudades');
Route::post('/pantallaUno/store', [pantallaUnoController::class, 'store'])->name('pantallaUno.store');


