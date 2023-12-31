@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<div class="col-md-8">
    <a href="{{route('producto.index')}}">
        <button type="button" class="btn btn-primary">Volver</button>
    </a>
    <br>
        <form class="formularioProducto" action="{{ route('producto.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="codigo">Codigo:</label>                   
                    <input type="text" class="form-control" name="code" id="codigo" value="{{ old('code') }}"  required>
                 </div>	
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="costo">Costo:</label>
                    <input type="number" class="form-control costo" name="cost" id="cost"  value="{{ old('cost')}}">
                 </div>
              </div>
           </div>
           <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="name" id="nameProduct" value="{{ old('name') }}" required>
           </div>

           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="price">Precio venta:</label>
                    <input type="number" class="form-control Precioventa" name="price" value="{{old('price')}}" id="price">
                 </div>
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="utility">% de Utilidad:</label>
                    <input type="number" class="form-control Utilidad"  name="utility"  value="{{ old('utility') }}" id="utility" required>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="Categoria">Categoria :</label>

                    <select class="form-control seleccionarCategoria"  name="category_id"  required>
                       <option value="">Selecione una Categoria</option>                    				
                        @foreach ($categories as $category)
                           <option value="{{ $category->id}}">{{ $category->name }}</option>  
                        @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="minimum_amount">Stop Minimo:</label>
                    <input type="number" class="form-control" name="minimum_amount"  value="0" id="minimum_amount" required>
                 </div>
              </div>
           </div>

           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="amount">Cantidad:</label>
                    <input type="number" class="form-control" name="amount" id="amount" value="0">
                 </div>
              </div>
              <div class="col-xs-6">
                 <div class="form-group">         
                    <label for="image">Foto:</label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*"> 
                    @error('image')
                        <small>La imagen supera las 2 megas</small>
                    @enderror                
                 </div>
              </div>
              <div class="col-xs-6">
               <div class="checkbox">
                  <label>
                     <input type="checkbox" name="state" id="state"> Activar
                  </label>
                  </div>
              </div>

           </div>   	

           <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
     </div>
  @endsection
@section('script')
<script src="{{asset('js/products.js')}}"></script>
@endsection