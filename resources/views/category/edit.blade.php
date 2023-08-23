<h2>Editar</h2>
<form action="{{route('categoria.update', $category )}}" method="post">
    @method('put')
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
    <label for="">Nombre de la categoria
        <input type="text" name="name" id="name" value="{{ $category->name}}">
    </label>
    @error('name')
    <small>El campo nombre no puede estar vacio</small>
    @enderror
    <label for="state">Activar</label>
    <input type="checkbox" name="state" id="state" @if($category->state) checked @endif>
    <input type="submit" value="crear">
</form>