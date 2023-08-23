<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'login']);
Route::get('/home', [HomeController::class, 'home']);
//categorias 
Route::get('/categorias', [CategoryController::class, 'index'])->name('categoria.index');
Route::get('/categoria/crear', [CategoryController::class, 'create'])->name('categoria.crear');
Route::post('/categoria', [CategoryController::class, 'store'])->name('categoria.sale');
Route::get('/categoria/{category}', [CategoryController::class, 'show'])->name('categoria.show');
Route::get('/categoria/{category}/edit', [CategoryController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{category}', [CategoryController::class, 'update'])->name('categoria.update');
Route::delete('/categoria/{category}', [CategoryController::class, 'destroy'])->name('categoria.destroy');
