@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<div class="col-md-8">
    <a href="{{route('producto.index')}}">
        <button type="button" class="btn btn-primary">Volver</button>
    </a>
    <br>
        <form class="formularioProducto" action="{{ route('producto.update', $product) }}" enctype="multipart/form-data" method="POST">
            @method('put')
            @csrf
            <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="codigo">Codigo:</label>                   
                    <input type="text" class="form-control" name="code" id="code" value="{{ $product->code }}">
                    @error('record')
                        <small>Este campo no puede estar vacio</small>
                    @enderror
                </div>	
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="costo">Costo:</label>
                    <input type="number" class="form-control costo" name="cost" id="cost" value="{{ $product->cost }}" required>
                 </div>
              </div>
           </div>
           <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="name" id="nameProduct"  value="{{ $product->name }}" required>
           </div>

           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="price">Precio venta:</label>
                    <input type="number" class="form-control Precioventa" name="price" value="{{ $product->price }}" id="price">
                 </div>
                 @error('record')
                    <small>Este campo no puede estar vacio</small>
                 @enderror
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="utility">% de Utilidad:</label>
                    <input type="number" class="form-control Utilidad"  name="utility"  value="{{ $product->utility }}" id="utility" required>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="Categoria">Categoria :</label>

                    <select class="form-control seleccionarCategoria"  name="category_id" required>
                       <option value="">Selecione una Categoria</option>                    				
                        @foreach ($categories as $category)
                           <option value="{{ $category->id}}" @if($product->category_id == $category->id) selected @endif >{{ $category->name }}</option>  
                        @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="minimum_amount">Stop Minimo:</label>
                    <input type="number" class="form-control" name="minimum_amount"  value="{{$product->minimum_amount}}" id="minimum_amount" required>
                 </div>
              </div>
           </div>

           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="amount">Cantidad:</label>
                    <input type="number" class="form-control" name="amount" id="amount" value="{{ $product->amount }}">
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
                     <input type="checkbox" name="state" id="state"  @if($product->state) checked @endif> Activar
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