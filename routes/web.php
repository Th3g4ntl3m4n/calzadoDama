<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\formProductoController;


Route::view('/', 'home')->name('home');
Route::view('acerca-de', 'about')->name('about');

Route::get('productos',  [ProductosController::class, 'index'])->name('productos.index');

Route::get('productos/{producto:slug}', [ProductosController::class, 'show'])->name('productos.show');

Route::view('contacto', 'contact')->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/formProductos', [formProductoController::class, 'create'])->name('formProductos');

require __DIR__.'/auth.php';
