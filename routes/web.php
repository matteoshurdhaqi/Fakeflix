<?php

use App\Http\Controllers\FilmController;
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

Route::get('/', [FilmController::class, 'index'])->name('welcome');

Route::get('/catalogofilms', [FilmController::class, 'catalogoFilm'])->name('cataloguefilms');

Route::get('/catalogo/dettagli/{id}', [FilmController::class, 'show'])->name('show');

Route::get('/catalogoseries', [FilmController::class, 'catalogoSerie'])->name('catalogueseries');
