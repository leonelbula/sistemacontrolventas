@extends('layouts.app')
@section('title'){{ $title }} @endsection
@section('content')

<a href="{{route('home')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>

<form action="{{ route('proveedor.store') }}" method="POST" >
   @csrf
   <div class="col-md-6">

         <div class="box-body">


            <div class="form-group">
               <label>Nombre o Rason social:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required>
               </div>
               <!-- /.input group -->
            </div>            

            <div class="form-group">
               <label>Nit - CC:</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-tag"></i>
                  </div>
                  <input type="text" class="form-control"name="identification_card"  value="{{old('identification_card')}}" required>
               </div>
               <!-- /.input group -->
            </div>             

            <div class="form-group">
               <label>Direccion:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="address" value="{{old('address')}}" required>
               </div>
               <!-- /.input group -->
            </div>
            <div class="form-group">
               <label>Departamento:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="department"  value="{{old('department')}}">
               </div>
               <!-- /.input group -->
            </div>
            <div class="form-group">
               <label>Ciudad:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" name="city" value="{{old('city')}}" required>
               </div>
               <!-- /.input group -->
            </div>             
            <div class="form-group">
               <label>Telefono:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="phone" data-inputmask='"mask": "(999) 999-9999"' value="{{old('phone')}}" data-mask>
               </div>
               <!-- /.input group -->
            </div>

            <div class="form-group">
               <label>Email:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-envelope-o"></i>
                  </div>
                  <input type="text" class="form-control" name="email" value="{{old('email')}}" >
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
         <div class="form-group">
            <label>Descripcion:</label>

            <div class="input-group">
               <div class="input-group-addon">
                  <i class="fa fa-bookmark-o"></i>
               </div>
               <textarea class="form-control" rows="3" name="description" placeholder="Descripcion ..." required></textarea>
            </div>
            <!-- /.input group -->
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