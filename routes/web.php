<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Movies;/*

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
    return view('welcome');
});

Route::get('movies/', [Movies::class, 'index'])->name('ind3x');
Route::get('movies/create', [Movies::class, 'create'])->name('cr3ate');
Route::post('movies/create', [Movies::class, 'store'])->name('st0re');
Route::delete('/movies/{movie}', [Movies::class, 'destroy'])->name('destroy');

Route::get('movies/{id}/edit', [Movies::class, 'edit'])->name('3dit');

Route::post('/movies/{id}', [Movies::class, 'update'])->name('upd4te');
