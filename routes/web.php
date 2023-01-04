<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', 
    function() {
        return view('welcome');
    }
)->name('welcome');

Route::get('/dashboard', 
    function() {
        return view('dashboard');
    }
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(
    function() {
        Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }
);


Route::get('/suplemen',
    function() {
        return view('suplemen');
    }
)->middleware(['auth', 'verified'])->name('suplemen');;


Route::get('/tentir',
    function() {
        return view('tentir');
    }
)->middleware(['auth', 'verified'])->name('tentir');;

Route::get('/video',
    function() {
        return view('video');
    }
)->middleware(['auth', 'verified'])->name('video');;

Route::get('/cheatsheet',
    function() {
        return view('cheatsheets');
    }
)->middleware(['auth', 'verified'])->name('cheatsheets');;

require __DIR__.'/auth.php';
