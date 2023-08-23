<h2>Nueva categoria</h2>

<form action="{{route('categoria.sale')}}" method="post">
    @csrf
    <label for="">Nombre de la categoria
        <input type="text" name="name" id="name">
    </label>
    @error('name')
    <small>El campo nombre no puede estar vacio</small>
    @enderror
    
    <label for="state">Activar</label>
    <input type="radio" name="state" id="state">
    <input type="submit" value="crear">
</form>