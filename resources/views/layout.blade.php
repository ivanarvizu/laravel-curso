<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi larasitio</title>

    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        .active {
            text-decoration: none;
            color: #1b6d85;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <a class="{{request()->is("/") ? "active": ""}}" href="{{ route('home') }}">Inicio</a>
        <a class="{{request()->is("saludos*") ? "active": ""}}" href="{{ route('saludos','lulz') }}">Saludos</a>
        <a class="{{request()->is("mensajes*") ? "active": ""}}" href="{{ route('messages.create') }}">Contactos</a>
    </nav>
</header>
@yield('contenido')
</body>
</html>