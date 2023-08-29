<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $title = 'Categorias';
        return view('category.index', compact('categories', 'title'));
    }
    public function create()
    {
        $title = 'Nueva Categoria';
        return view('category.create', compact('title'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);

        $name = $request->input('name');
        $state = $request->input('state');

        if ($state == 'on') {
            $state = true;
        } else {
            $state = false;
        }
        //asignacion masiva Category::create($request->all());
        $category = new Category();
        $category->name = $name;
        $category->state = $state;

        $category->save();

        return redirect()->route('categoria.index');
    }

    public function show(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function edit(Category $category)
    {
        $title = 'Editar Categorias';
        return view('category.edit', compact('category', 'title'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category->name = $request->name;

        $state = $request->input('state');

        if ($state == 'on') {
            $state = true;
        } else {
            $state = false;
        }

        $category->state = $state;
        //$categoru->update($request->all())
        $category->save();


        return redirect()->route('categoria.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categoria.index');
    }
}
