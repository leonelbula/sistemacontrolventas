@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="col-md-6">
        <div class="'card-header">
            <a href="{{ route('categoria.index') }}">
                <button type="button" class="btn btn-primary">Volver</button>
            </a>
            <br>
        </div>
        <div class="card-body">
            <form role="form" action="{{ route('categoria.update', $category) }}" method="post">
                @method('put')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Categoria</label>
                        <input type="text" class="form-control" name="name" id="nameCategory"
                            value="{{ $category->name }}" placeholder="Nombre">
                    </div>
                    @error('name')
                        <small>El campo nombre no puede estar vacio</small>
                    @enderror

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="state" id="state"
                                @if ($category->state) checked @endif> Activar
                        </label>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
