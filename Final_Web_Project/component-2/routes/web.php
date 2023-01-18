<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\searchController;
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

Route::resource('/book', BookController::class);
Route::post('/searchBook', [searchController::class, 'search'])->name('searchBook');
Route::post('/searchGame', [searchController::class, 'search'])->name('searchGame');
Route::post('/searchCD', [searchController::class, 'search'])->name('searchCD');
Route::resource('/game', GameController::class);
Route::resource('/cd', CdController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
