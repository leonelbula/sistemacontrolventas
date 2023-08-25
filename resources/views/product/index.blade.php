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
    <th>Codigo</th>
    <th>nombre</th>
    <th>categoria</th>
    <th>costo</th>
    <th>precio</th>
    <th>Cantidad</th>
    <th>Stock minimo</th>
    <th>Estado</th>
    <th>Aciones</th>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->code }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category_id }}</td>
            <td>{{ $product->cost }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->minimum_amount }}</td>
            <td>
              @if($product->state)
                <button class="btn btn-info btn-xs">
                  Activo
                </button>
                @else
                  <button class="btn btn-primary btn-xs">Desactivado</button>
               @endif
              </td>
            <td>
              <div class="btn-group">
              <a href="{{ route('producto.edit', $product) }}" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
              <form action="{{route('producto.destroy', $product)}}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger" ><i class="fa fa-times"></i></button>
            </form>
              </div>
            </td>
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