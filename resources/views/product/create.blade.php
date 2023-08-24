@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<div class="col-md-8">
    <a href="{{route('producto.index')}}">
        <button type="button" class="btn btn-primary">Volver</button>
    </a>
    <br>
        <form class="formularioProducto" action="" enctype="multipart/form-data" method="POST">
           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="codigo">Codigo:</label>                   
                    <input type="text" class="form-control" name="codigo" id="codigo" >
                 </div>	
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="costo">Costo:</label>
                    <input type="number" class="form-control costo" name="cost" id="costo" required>
                 </div>
              </div>
           </div>
           <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="name" id="nameProduct" required>
           </div>

           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="Precio 1">Precio venta 1:</label>
                    <input type="number" class="form-control Precioventa" name="price" value="" id="Precioventa">
                 </div>
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="Utilidad 1">% de Utilidad 1:</label>
                    <input type="number" class="form-control Utilidad"  name="Utilidad" id="Utilidad" required>
                 </div>
              </div>
           </div>
           <div class="row">
            <div class="col-xs-6">
               <div class="form-group">
                  <label for="Precio 1">Precio venta 2:</label>
                  <input type="number" class="form-control Precioventa" name="price" value="" id="Precioventa">
               </div>
            </div>
            <div class="col-xs-6">
               <div class="form-group">
                  <label for="Utilidad 1">% de Utilidad 2</label>
                  <input type="number" class="form-control Utilidad"  name="Utilidad" id="Utilidad" required>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-6">
               <div class="form-group">
                  <label for="Precio 1">Precio venta 3:</label>
                  <input type="number" class="form-control Precioventa" name="price" value="" id="Precioventa">
               </div>
            </div>
            <div class="col-xs-6">
               <div class="form-group">
                  <label for="Utilidad 1">% de Utilidad 3:</label>
                  <input type="number" class="form-control Utilidad"  name="Utilidad" id="Utilidad" required>
               </div>
            </div>
         </div>

           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="Categoria">Categoria :</label>

                    <select class="form-control seleccionarCategoria"  name="idcategoria" required>
                       <option value="">Selecione una Categoria</option>
                       				


                    </select>
                 </div>
              </div>
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="contidadMin">Stop Minimo:</label>
                    <input type="number" class="form-control" name="cantidamin" id="cantidamin" required>
                 </div>
              </div>
           </div>

           <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <label for="fiestapatronal">Cantidad:</label>
                    <input type="number" class="form-control" name="cantidainicial" id="cantidainicial" value="0">
                 </div>
              </div>
              <div class="col-xs-6">
                 <div class="form-group">         
                    <label for="foto">Foto:</label>
                    <input type="file" class="form-control" name="foto" id="foto">                 
                 </div>
              </div>

           </div>   	

           <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
     </div>
  @endsection