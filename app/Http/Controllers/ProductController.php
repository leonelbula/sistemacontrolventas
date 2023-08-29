<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::all();
        $title = 'Lista de Productos';
        return view('product.index', compact('products', 'title'));
    }
    public function create()
    {
        $categories = Category::all();
        $title = 'Nuevo Producto';
        return view('product.create', compact('title', 'categories'));
    }
    public function store(ProductRequest $request)
    {
        if ($request->image) {
            $request->validate([
                'image' => 'image|max:2048'
            ]);
            $imege = $request->file('image')->store('public/products');
            $url = Storage::url($imege);
        } else {
            $url = "";
        }


        if ($request->state == 'on') {
            $state = true;
        } else {
            $state = false;
        }

        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->utility = $request->utility;
        $product->minimum_amount = $request->minimum_amount;
        $product->amount = $request->amount;
        $product->category_id = $request->category_id;
        $product->image = $url;
        $product->state = $state;

        $resul = $product->save();

        return redirect()->route('producto.index');
    }
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
    public function edit(Product $product)
    {
        $categories = Category::all();
        $title = 'Editar Producto';
        return view('product.edit', compact('product', 'categories', 'title'));
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'code' => 'required|max:150',
            'name' => 'required|max:150',
            'cost' => 'required',
            'price' => 'required',
            'utility' => 'required',
            'minimum_amount' => 'required',
            'amount' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->image) {
            $request->validate([
                'image' => 'image|max:2048'
            ]);
            $imege = $request->file('image')->store('public/products');
            $url = Storage::url($imege);
        } else {
            $url = "";
        }


        if ($request->state == 'on') {
            $state = true;
        } else {
            $state = false;
        }

        $product->code = $request->code;
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->utility = $request->utility;
        $product->minimum_amount = $request->minimum_amount;
        $product->amount = $request->amount;
        $product->category_id = $request->category_id;
        $product->image = $url;
        $product->state = $state;

        $resul = $product->save();

        return redirect()->route('producto.index');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('producto.index'));
    }
}
