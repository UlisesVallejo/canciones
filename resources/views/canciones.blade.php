<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Canciones</h1>
    
    @if(is_null($cancion))
        <ul>
            @foreach ($canciones as $cancion)
                <li>{{ $cancion['nombre'] }} - {{ $cancion['artista']}}</li>  

            @endforeach
        </ul>
    @else
        <p>{{ $cancion['nombre'] }}</p>
        
        <p>{{ $cancion['artista'] }}</p>
    @endif
</body>
</html>
</html>