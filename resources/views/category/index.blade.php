@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')
<a href="{{route('home')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>
<a href="{{route('categoria.crear')}}">
    <button type="button" class="btn btn-primary">Nueva categoria</button>
</a>

<table id="categoryTable" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Estado</th>
      <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id}}</td>
            <td>{{ $category->name}}</td>
            @if($category->state)
            <td>Activa</td>
            @else
            <td>Desactivada</td>
            @endif
            <td>
                <a href="{{ route('categoria.edit', $category) }}">
                    <button type="button" class="btn btn-warning">Editar</button>
                </a>
                <form action="{{route('categoria.destroy', $category)}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit"  class="btn btn-danger" value="Eliminar">
                </form>

            </td>
        </tr>
        @endforeach

    </tbody>
  </table>
@endsection

@section('script')
<script>
    $(function () {
      $('#categoryTable').DataTable({
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