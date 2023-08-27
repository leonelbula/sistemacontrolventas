@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<a href="{{route('cliente.index')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>

<form action="{{ route('cliente.update', $customer) }}" method="POST" >
    @method('put')
   @csrf
   <div class="col-md-6">

      <div class="box box-danger">
         <div class="box-header">
            <h3 class="box-title">Registrar Nuevo Cliente</h3>
         </div>
         <div class="box-body">


            <div class="form-group">
               <label>Nombre:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="full_name" value="{{ $customer->full_name }}" required>
               </div>
               <!-- /.input group -->
            </div>            

            <div class="form-group">
               <label>Nit - CC:</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-tag"></i>
                  </div>
                  <input type="text" class="form-control"name="identification_card"  value="{{$customer->identification_card }}" required>
               </div>
               <!-- /.input group -->
            </div>             

            <div class="form-group">
               <label>Direccion:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="address" value="{{$customer->address}}" required>
               </div>
               <!-- /.input group -->
            </div>
            <div class="form-group">
               <label>Departamento:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="department"  value="{{$customer->department}}">
               </div>
               <!-- /.input group -->
            </div>
            <div class="form-group">
               <label>Ciudad:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="city" value="{{$customer->city}}" required>
               </div>
               <!-- /.input group -->
            </div>             
            <div class="form-group">
               <label>Telefono:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="phone" data-inputmask='"mask": "(999) 999-9999"' value="{{$customer->phone}}" data-mask>
               </div>
               <!-- /.input group -->
            </div>

            <div class="form-group">
               <label>Email:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-envelope-o"></i>
                  </div>
                  <input type="text" class="form-control" name="email" value="{{$customer->email}}" >
               </div>
               <!-- /.input group -->
            </div>           
            <div class="form-group">
                <label>Cupo de credito:</label>
 
                <div class="input-group">
                   <div class="input-group-addon">
                      <i class="fa fa-dollar-sign">$</i>
                   </div>
                   <input type="number" class="form-control" name="credit_amount" value="{{old('credit_amount')}}" >
                </div>
                <!-- /.input group -->
             </div>           
 
         </div>
         <button class="btn btn-primary" type="submit">

            Guardar 

         </button>
      </div>
      <!-- /.box -->


      <!-- /.box -->

   </div>       


</form>

@endsection