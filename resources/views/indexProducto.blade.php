<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
</head>
<body>

    <h1>Productos</h1>
    <ul>
        @foreach
            <li>{{ $prod->id }} - {{ prod->nombre }}</li>

        @endforeach
    </ul>

</body>
</html>