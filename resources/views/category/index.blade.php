<h1>Categorias</h1>
<a href="{{route('categoria.crear')}}">Nueva categoria</a>

<table>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Estado</th>
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
                <a href="{{ route('categoria.edit', $category) }}">Editar</a>
                <form action="{{route('categoria.destroy', $category)}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Eliminar">
                </form>
               
            </td>
        </tr>
        @endforeach

    </tbody>
</table>