<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleProduct;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = "Lista de ventas";
        $sales = Sale::orderBy('id', 'DESC')->get();
        return view('sale.index', compact('title', 'sales'));
    }
    public function create()
    {
        $title = 'Nueva venta';
        return view('sale.create', compact('title'));
    }

    public function store(Request $request)
    {
        $listProduct = json_decode($request->listaProductos, true);

        $product = new Product();
        $cost = 0;
        foreach ($listProduct as $product) {

            $productDetalle = Product::where('id', $product['id'])->first();
            $amount = $productDetalle['amount'];
            $newAmount = $amount - $product['cantidad'];

            $productDetalle['amount'] = $newAmount;
            $productDetalle->save();
            $cost += $product['costo'];
        }
        $utility = $request->totalVenta - $cost;

        $sale = new Sale();
        $lastSave = $sale::all()->last();


        if (isset($lastSave)) {
            $code_save = $lastSave->sale_number;
            $code_save++;
        } else {
            $parameter = Parameter::find(1);
            $code_save =  $parameter->sale_code;
            $code_save++;
        }
        if ($request->tipoventa == 1) {
            $balance = $request->totalVenta;
            $expiration_date = $request->fecha;
        } else {
            $balance = 0;
            $expiration_date = $request->fecha;
        }

        $sale->sale_number = $code_save;
        $sale->content = $request->listaProductos;
        $sale->cost = $cost;
        $sale->utility = $utility;
        $sale->total = $request->totalVenta;
        $sale->balance = $balance;
        $sale->hour = date('h:i:s');
        $sale->date_sale = $request->fecha;
        $sale->expiration_date = $expiration_date;
        $sale->customer_id = $request->IdCliente;
        $sale->user_id = 1;
        $sale->save();
        $sale_id = $sale->id;

        $saleProducto = new SaleProduct();

        foreach ($listProduct as $product) {

            $saleProducto->amount = $product['cantidad'];
            $saleProducto->fecha = $request->fecha;
            $saleProducto->product_id = $product['id'];
            $saleProducto->sale_id = $sale_id;
            $saleProducto->save();
        }
        return redirect()->route('venta.index');
    }
}
