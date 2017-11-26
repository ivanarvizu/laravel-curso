<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Saludos para {{$nombre}}</h1>

@forelse($consolas as $consola)
    <li>{{$consola}}</li>
@empty
    <p>No consolas</p>
@endforelse

</body>
</html>