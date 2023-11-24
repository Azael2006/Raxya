<?php

use App\Http\Controllers\GloboController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Globo;

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
    return view('globos.inicio'); //Route::view('/','welcome')->name('welcome');
});

//Route::view('/globos', 'globos.estado')->name('globos.estado');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [GloboController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/globos', [GloboController::class, 'index'])
        ->name('globos.index');

    Route::post('/globos', [GloboController::class, 'store'])
        ->name('globos.store');
});
require __DIR__ . '/auth.php';
