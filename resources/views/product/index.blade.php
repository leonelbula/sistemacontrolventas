@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<a href="{{route('home')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>
<a href="{{ route('producto.create') }}">
    <button type="button" class="btn btn-primary">Nuevo producto</button>
</a>

<table id="productTable" class="table table-bordered table-striped">
    <th>id</th>
    <th>nombre</th>
    <th>categoria</th>
    <th>costo</th>
    <th>precio</th>
    <th>precio Uno</th>
    <th>precio Dos</th>
    <th>precio Tres</th>
    <th>Cantidad</th>
    <th>Stock minimo</th>
    <th>Aciones</th>
    <tbody>
        @foreach($products as $product)
            <td>{{ $product->codigo }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->cost }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->price_two }}</td>
            <td>{{ $product->price_three }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->minimum_amount }}</td>
            <a href="">Editar</a>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection


@section('scriptTable')
<script>
    $(function () {
      $('#productTable').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection