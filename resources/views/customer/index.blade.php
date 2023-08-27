@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<a href="{{route('home')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>
<a href="{{ route('cliente.create') }}">
    <button type="button" class="btn btn-primary">Nuevo cliente</button>
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
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->full_name }}</td>
            <td>{{ $customer->identification_card }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->city }}</td>
            <td>{{ $customer->department }}</td>
            <td>
              <div class="btn-group">
              <a href="{{ route('cliente.edit', $customer) }}" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
              <form action="{{route('cliente.destroy', $customer)}}" method="post">
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