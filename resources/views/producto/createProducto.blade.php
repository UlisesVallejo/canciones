<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>

    <form action="/producto" method="POST">
        @csrf 

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"><br>

        @error('nombre')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="descripcion">Descripcion</label><br>
        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}"><br>

        @error('descripcion')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="costo">Costo</label><br>
        <input type="text" name="coto" id="coto" value="{{ old('coto') }}"><br>

        @error('coto')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="stock">Stock</label><br>
        <input type="number" name="stock" id="stock" value="{{ old('stock') }}"><br>

        @error('stock')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>