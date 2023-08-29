@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<a href="{{route('home')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>
<a href="{{ route('venta.create') }}">
    <button type="button" class="btn btn-primary">Nueva Venta</button>
</a>

<table id="ventasRealizadas" class="table table-bordered table-striped" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Cliente</th>
            <th>fecha factura</th>
            <th>fecha Vencimiento</th>
            <th>valor</th> 
            <th>Tipo</th>
            <th>acciones</th>							
        </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach ($sales as $sale)
          <tr>
            <td>{{ $i++}}</td>
            <td>{{ $sale->sale_number }}</td>
            <td>{{ $sale->customer_id }}</td>
            <td>{{ $sale->created_at }}</td>
            <td>{{ $sale->expiration_date }}</td>
            <td>{{ $sale->total }}</td>
            <td>
            
            </td>
          </tr>
      @endforeach
    </tbody>
</table>
@endsection
@section('script')
<script>
    $(function () {
      $('#saleTable').DataTable({
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