@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<a href="{{route('proveedor.index')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>

<form action="{{ route('proveedor.update', $supplier) }}" method="POST" >
    @method('put')
   @csrf
   <div class="col-md-6">

         <div class="box-body">


            <div class="form-group">
               <label>Nombre:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="full_name" value="{{ $supplier->full_name }}" required>
               </div>
               <!-- /.input group -->          

            <div class="form-group">
               <label>Nit - CC:</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-tag"></i>
                  </div>
                  <input type="text" class="form-control"name="identification_card"  value="{{$supplier->identification_card }}" required>
               </div>
               <!-- /.input group -->
            </div>             

            <div class="form-group">
               <label>Direccion:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="address" value="{{$supplier->address}}" required>
               </div>
               <!-- /.input group -->
            </div>
            <div class="form-group">
               <label>Departamento:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="department"  value="{{$supplier->department}}">
               </div>
               <!-- /.input group -->
            </div>
            <div class="form-group">
               <label>Ciudad:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="city" value="{{$supplier->city}}" required>
               </div>
               <!-- /.input group -->
            </div>             
            <div class="form-group">
               <label>Telefono:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="phone" data-inputmask='"mask": "(999) 999-9999"' value="{{$supplier->phone}}" data-mask>
               </div>
               <!-- /.input group -->
            </div>

            <div class="form-group">
               <label>Email:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-envelope-o"></i>
                  </div>
                  <input type="text" class="form-control" name="email" value="{{$supplier->email}}" >
               </div>
               <!-- /.input group -->
            </div>           
            <div class="form-group">
                <label>Cupo de credito:</label>
 
                <div class="input-group">
                   <div class="input-group-addon">
                      <i class="fa fa-dollar-sign">$</i>
                   </div>
                   <input type="number" class="form-control" name="credit_amount" value="{{$supplier->credit_amount}}" >
                </div>
                <!-- /.input group -->
             </div>  
             <div class="form-group">
               <label>Descripcion:</label>
   
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-bookmark-o"></i>
                  </div>
                  <textarea class="form-control" rows="3" name="description" placeholder="Descripcion ..." required>{{$supplier->description}}</textarea>
               </div>
               <!-- /.input group -->
            </div>         
 
         </div>
         <button class="btn btn-primary" type="submit">

            Guardar 

         </button>
   
      <!-- /.box -->

   </div>
      <!-- /.box -->

   </div>       


</form>

@endsection