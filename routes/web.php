<?php

use App\Http\Controllers\AjaxProduct;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'login']);
Route::get('/home', [HomeController::class, 'home'])->name('home');
//categorias 
Route::get('/categorias', [CategoryController::class, 'index'])->name('categoria.index');
Route::get('/categoria/crear', [CategoryController::class, 'create'])->name('categoria.crear');
Route::post('/categoria', [CategoryController::class, 'store'])->name('categoria.sale');
Route::get('/categoria/{category}', [CategoryController::class, 'show'])->name('categoria.show');
Route::get('/categoria/{category}/edit', [CategoryController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{category}', [CategoryController::class, 'update'])->name('categoria.update');
Route::delete('/categoria/{category}', [CategoryController::class, 'destroy'])->name('categoria.destroy');

//productos
Route::get('/productos', [ProductController::class, 'index'])->name('producto.index');
Route::get('/producto/crear', [ProductController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductController::class, 'store'])->name('producto.store');
Route::get('/producto/{product}/ver', [ProductController::class, 'show'])->name('producto.show');
Route::get('/producto/{product}/edit', [ProductController::class, 'edit'])->name('producto.edit');
Route::put('/producto/{product}', [ProductController::class, 'update'])->name('producto.update');
Route::delete('/producto/{product}', [ProductController::class, 'destroy'])->name('producto.destroy');

//producto Ajax
Route::get('/allproduct', [AjaxProduct::class, 'productAll'])->name('ajaxproducto.all');
Route::post('/producto', [AjaxProduct::class, 'productGet'])->name('ajaxproducto.get');



//clientes
Route::get('/cliente', [CustomerController::class, 'index'])->name('cliente.index');
Route::get('/cliente/crear', [CustomerController::class, 'create'])->name('cliente.create');
Route::post('/cliente', [CustomerController::class, 'store'])->name('cliente.store');
Route::get('/cliente/{customer}/ver', [CustomerController::class, 'show'])->name('cliente.show');
Route::get('/cliente/{customer}/edit', [CustomerController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/{customer}', [CustomerController::class, 'update'])->name('cliente.update');
Route::delete('/cliente/{customer}', [CustomerController::class, 'destroy'])->name('cliente.destroy');

//ventas
Route::get('/ventas', [SaleController::class, 'index'])->name('venta.index');
Route::get('/venta/crear', [SaleController::class, 'create'])->name('venta.create');
Route::post('/venta', [SaleController::class, 'store'])->name('venta.store');
Route::get('/venta/{sale}/ver', [SaleController::class, 'show'])->name('venta.show');
Route::get('/venta/{sale}/edit', [SaleController::class, 'edit'])->name('venta.edit');
Route::put('/venta/{sale}', [SaleController::class, 'update'])->name('venta.update');
Route::delete('/venta/{sale}', [SaleController::class, 'destroy'])->name('venta.destroy');
