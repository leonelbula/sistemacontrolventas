@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection
@section('subtitle')
    <h1>Categorias</h1>
@endsection
@section('content')
    <div class="'card-header">

        <a href="{{ route('home') }}">
            <button type="button" class="btn btn-primary">Volver</button>
        </a>
        <a href="{{ route('categoria.crear') }}">
            <button type="button" class="btn btn-primary">Nueva categoria</button>
        </a>

    </div>
    <div class="card-body">
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
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        @if ($category->state)
                            <td>Activa</td>
                        @else
                            <td>Desactivada</td>
                        @endif
                        <td>
                            <a href="" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('categoria.edit', $category) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('categoria.destroy', $category) }}" method="post"
                                style="display: inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('#categoryTable').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection
