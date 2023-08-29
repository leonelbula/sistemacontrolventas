<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Sale;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $title = 'Paramentros';
        return view('parameter.index', compact('title'));
    }
    public function store(Request $request)
    {

        if ($request->automatic_product == 'on') {
            $automatic = 1;
        } else {
            $automatic = 0;
        }
        $parameter = new Parameter();
        $parameter->sale_code = $request->sale_code;
        $parameter->prefix_sale = $request->prefix_sale;
        $parameter->product_code = $request->product_code;
        $parameter->automatic_product = $automatic;
        $parameter->save();

        return redirect()->route('parametros.index');
    }
}
