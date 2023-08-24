@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<div class="col-md-6">
    <a href="{{route('categoria.index')}}">
        <button type="button" class="btn btn-primary">Volver</button>
    </a>
    <br>
<form role="form" action="{{route('categoria.sale')}}" method="post">
    @csrf 
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre Categoria</label>
        <input type="text" class="form-control" name="name" id="nameCategory" placeholder="Nombre">
      </div>
      @error('name')
    <small>El campo nombre no puede estar vacio</small>
    @enderror
            
      <div class="checkbox">
        <label>
          <input type="checkbox" name="state" id="state"> Activar
        </label>
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
  
</div>
@endsection