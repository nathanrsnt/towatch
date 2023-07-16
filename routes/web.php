<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\WatchedController;
use App\Models\Watched;

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

//CRUD
route::get('/', [MoviesController::class, 'index'])->name('movies.index');
route::post('/movies', [MoviesController::class, 'store'])->name('movies.store');
route::get('/movies/{movie}/edit', [MoviesController::class, 'edit'])->name('movies.edit');
route::delete('/movies/{movie}', [MoviesController::class, 'destroy'])->name('movies.destroy');

//Watched
route::get('/watched', [WatchedController::class, 'index'])->name('watched.index');
route::delete('/watched/{watched}', [WatchedController::class, 'destroy'])->name('watched.destroy');
