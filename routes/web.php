<?php

use App\Http\Controllers\AjaxCustomer;
use App\Http\Controllers\AjaxProduct;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SeparatePlanController;
use App\Http\Controllers\SpentController;
use App\Http\Controllers\StateCountCustomer;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

//llamadas Ajax
Route::get('/allproduct', [AjaxProduct::class, 'productAll'])->name('ajaxproducto.all');
Route::post('/productoid', [AjaxProduct::class, 'productGet'])->name('ajaxproducto.get');
Route::get('/allcustomer', [AjaxCustomer::class, 'customerAll'])->name('ajaxcustomer.all');
Route::post('/customerid', [AjaxCustomer::class, 'customerGet'])->name('ajaxcustomer.get');


Route::get('/home', [HomeController::class, 'index'])->name('home');

//parametros
Route::get('/parametros', [ParameterController::class, 'index'])->name('parametros.index');
Route::post('/paramtros', [ParameterController::class, 'store'])->name('parametros.store');

//categorias 
Route::get('/categorias', [CategoryController::class, 'index'])->name('categoria.index');
Route::get('/categoria/crear', [CategoryController::class, 'create'])->name('categoria.crear');
Route::post('/categoria', [CategoryController::class, 'store'])->name('categoria.sale');
Route::get('/categoria/{category}', [CategoryController::class, 'show'])->name('categoria.show');
Route::get('/categoria/{category}/editar', [CategoryController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{category}', [CategoryController::class, 'update'])->name('categoria.update');
Route::delete('/categoria/{category}', [CategoryController::class, 'destroy'])->name('categoria.destroy');

//productos
Route::get('/productos', [ProductController::class, 'index'])->name('producto.index');
Route::get('/producto/crear', [ProductController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductController::class, 'store'])->name('producto.store');
Route::get('/producto/{product}/ver', [ProductController::class, 'show'])->name('producto.show');
Route::get('/producto/{product}/editar', [ProductController::class, 'edit'])->name('producto.edit');
Route::put('/producto/{product}', [ProductController::class, 'update'])->name('producto.update');
Route::delete('/producto/{product}', [ProductController::class, 'destroy'])->name('producto.destroy');

//clientes
Route::get('/cliente', [CustomerController::class, 'index'])->name('cliente.index');
Route::get('/cliente/crear', [CustomerController::class, 'create'])->name('cliente.create');
Route::post('/cliente', [CustomerController::class, 'store'])->name('cliente.store');
Route::get('/cliente/{customer}/ver', [CustomerController::class, 'show'])->name('cliente.show');
Route::get('/cliente/{customer}/editar', [CustomerController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/{customer}', [CustomerController::class, 'update'])->name('cliente.update');
Route::delete('/cliente/{customer}', [CustomerController::class, 'destroy'])->name('cliente.destroy');

//estadocuentacliente
Route::get('/estadocuentacliente', [StateCountCustomer::class, 'index'])->name('estadocuentacliente.index');


//ventas
Route::get('/ventas', [SaleController::class, 'index'])->name('venta.index');
Route::get('/venta/crear', [SaleController::class, 'create'])->name('venta.create');
Route::post('/venta', [SaleController::class, 'store'])->name('venta.store');
Route::get('/venta/{sale}/ver', [SaleController::class, 'show'])->name('venta.show');
Route::get('/venta/{sale}/editar', [SaleController::class, 'edit'])->name('venta.edit');
Route::put('/venta/{sale}', [SaleController::class, 'update'])->name('venta.update');
Route::delete('/venta/{sale}', [SaleController::class, 'destroy'])->name('venta.destroy');

//gastos
Route::get('/gastos', [SpentController::class, 'index'])->name('gasto.index');
Route::get('/gastos/create', [SpentController::class, 'create'])->name('gasto.create');
Route::post('/gasto', [SpentController::class, 'store'])->name('gasto.store');
Route::get('/gastos/{spent}/editar', [SpentController::class, 'edit'])->name('gasto.edit');
Route::put('/gastos/{spent}', [SpentController::class, 'update'])->name('gasto.update');
Route::delete('/gastos/{spent}', [SpentController::class, 'destroy'])->name('gasto.destroy');

//proveedor
Route::get('/proveedores', [SupplierController::class, 'index'])->name('proveedor.index');
Route::get('/proveedor/crear', [SupplierController::class, 'create'])->name('proveedor.create');
Route::post('/proveedor', [SupplierController::class, 'store'])->name('proveedor.store');
Route::get('/proveedor/{supplier}/ver', [SupplierController::class, 'show'])->name('proveedor.show');
Route::get('/proveedor/{supplier}/editar', [SupplierController::class, 'edit'])->name('proveedor.edit');
Route::put('/proveedor/{supplier}', [SupplierController::class, 'update'])->name('proveedor.update');
Route::delete('/proveedor/{supplier}', [SupplierController::class, 'destroy'])->name('proveedor.destroy');

//plazo
Route::get('/plazos', [TermController::class, 'index'])->name('plazo.index');
Route::get('/plazos/crear', [TermController::class, 'create'])->name('plazo.create');
Route::post('/plazos', [TermController::class, 'store'])->name('plazo.store');
Route::get('/plazos/{term}/editar', [TermController::class, 'edit'])->name('plazo.edit');
Route::put('/plazos/{term}', [TermController::class, 'update'])->name('plazo.update');
Route::delete('/plazos/{term}', [TermController::class, 'destroy'])->name('plazo.destroy');


//Plan separe
Route::get('/plansepare', [SeparatePlanController::class, 'index'])->name('plansepare.index');
Route::get('/plansepare/crear', [SeparatePlanController::class, 'create'])->name('plansepare.create');
