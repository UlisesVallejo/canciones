<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>

    <form action="/producto/{{ $producto->id }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $producto->nombre }}"><br>

        @error('nombre')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="descripcion">Descripcion</label><br>
        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') ?? $producto->descripcion }}"><br>

        @error('descripcion')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="costo">Costo</label><br>
        <input type="text" name="coto" id="coto" value="{{ old('coto') ?? $producto->coto }}"><br>

        @error('coto')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="stock">Stock</label><br>
        <input type="number" name="stock" id="stock" value="{{ old('stock') ?? $producto->stock }}"><br>

        @error('stock')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>