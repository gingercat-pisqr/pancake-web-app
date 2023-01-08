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
)->middleware(['auth', 'verified'])->name('suplemen');

Route::get('/tentir',
    function() {
        return view('tentir');
    }
)->middleware(['auth', 'verified'])->name('tentir');

Route::get('/video',
    function() {
        return view('video');
    }
)->middleware(['auth', 'verified'])->name('video');

Route::get('/cheatsheet',
    function() {
        return view('cheatsheets');
    }
)->middleware(['auth', 'verified'])->name('cheatsheets');

// Mata Kuliah
Route::get('/EkonomiMakro',
    function() {
        return view('matkul.ekonomimakro');
    }
)->middleware(['auth', 'verified'])->name('ekonomimakro');

Route::get('/Perpajakan',
    function() {
        return view('matkul.perpajakan');
    }
)->middleware(['auth', 'verified'])->name('perpajakan');

Route::get('/AkuntansiBiaya',
    function() {
        return view('matkul.akuntansibiaya');
    }
)->middleware(['auth', 'verified'])->name('akuntansibiaya');

Route::get('/KeuanganPublik',
    function() {
        return view('matkul.keuanganpublik');
    }
)->middleware(['auth', 'verified'])->name('keuanganpublik');

Route::get('/StatistikaTerapan',
    function() {
        return view('matkul.statistikaterapan');
    }
)->middleware(['auth', 'verified'])->name('statistikaterapan');

Route::get('/ManajemenKeuangan',
    function() {
        return view('matkul.manajemenkeuangan');
    }
)->middleware(['auth', 'verified'])->name('manajemenkeuangan');

Route::get('/PenganggaranSektorPublik',
    function() {
        return view('matkul.penganggaransektorpublik');
    }
)->middleware(['auth', 'verified'])->name('penganggaransektorpublik');

Route::get('/ManajemenStrategi',
    function() {
        return view('matkul.manajemenstrategi');
    }
)->middleware(['auth', 'verified'])->name('manajemenstrategi');

require __DIR__.'/auth.php';
