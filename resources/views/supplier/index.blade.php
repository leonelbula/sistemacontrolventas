@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<a href="{{route('home')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>
<a href="{{ route('proveedor.create') }}">
    <button type="button" class="btn btn-primary">Nuevo Proveedor</button>
</a>

<table id="productTable" class="table table-bordered table-striped">
    <tr>
        <th style="width:10px">Codigo</th>
        <th>Razon Social o Nombre</th>
        <th>Nit</th> 
        <th>Telefono</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Departamento</th> 
        <th>Acciones</th>
     </tr>
    <tbody>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->id }}</td>
            <td>{{ $supplier->full_name }}</td>
            <td>{{ $supplier->identification_card }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->address }}</td>
            <td>{{ $supplier->city }}</td>
            <td>{{ $supplier->department }}</td>
            <td>
              <div class="btn-group">
              <a href="{{ route('proveedor.edit', $supplier) }}" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
              <form action="{{route('proveedor.destroy', $supplier)}}" method="post">
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


@section('script')
<script>
    $(function () {
      $('#customerTable').DataTable({
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