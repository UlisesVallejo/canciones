<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    
    <h1>Productos</h1>
    <a href ="/producto/create">Agregar Producto</a><br>
    
    @foreach($productos as $prod)
        <h4>Producto</h4>
        <ul>
            <li>ID: {{ $prod->id }}</li>
            <li>Nombre: {{ $prod->nombre }}</li>
            <li>Costo: {{ $prod->coto }}</li>
            <a href="/producto/{{ $prod->id }}">Detalle (SHOW)</a>
        </ul>
    @endforeach

</body>
</html>