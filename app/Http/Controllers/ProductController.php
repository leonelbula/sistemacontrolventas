<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $title = 'Lista de Productos';
        return view('product.index', compact('products', 'title'));
    }
    public function create()
    {
        $title = 'Nuevo Producto';
        return view('product.create', compact('title'));
    }
    public function store(ProductRequest $request)
    {

        //Product::created($request->all());
    }
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('product.show', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('producto.index'));
    }
}
