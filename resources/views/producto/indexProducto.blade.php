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
    
    @foreach($productos as $prod)
        <h4>Producto</h4>
        <ul>
            <li>Nombre: {{ $prod->nombre }}</li>
            <li>Descripcion: {{ $prod->descripcion }}</li>
            <li>Costo: {{ $prod->coto }}</li>
            <li>Stock: {{ $prod->stock }}</li>
        </ul>
    @endforeach

</body>
</html>