<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $title = "Lista de clientes";
        return view('customer.index', compact('customers', 'title'));
    }

    public function create()
    {
        $title = "Nuevo clientes";
        return view('customer.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'identification_card' => 'required',
            'address' => 'required|string',
            'department' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'credit_amount' => 'required',

        ]);
        $customer = new Customer();
        $customer->full_name = $request->full_name;
        $customer->identification_card = $request->identification_card;
        $customer->address = $request->address;
        $customer->department = $request->department;
        $customer->city = $request->city;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->credit_amount = $request->credit_amount;

        $customer->save();

        return redirect()->route('cliente.index');
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $title = "Editar Cliente";
        return view('customer.edit', compact('customer', 'title'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'full_name' => 'required|string',
            'identification_card' => 'required',
            'address' => 'required|string',
            'department' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'credit_amount' => 'required',

        ]);

        $customer->full_name = $request->full_name;
        $customer->identification_card = $request->identification_card;
        $customer->address = $request->address;
        $customer->department = $request->department;
        $customer->city = $request->city;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->credit_amount = $request->credit_amount;

        $customer->save();
        
        return redirect()->route('cliente.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('cliente.index');
    }
}
