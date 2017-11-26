<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi larasitio</title>
</head>
<body>
<header>
    <nav>
        <a href="<?php echo route('home'); ?>">Inicio</a>
        <a href="<?php echo route('saludos','lulz'); ?>">Saludos</a>
        <a href="<?php echo route('contactos'); ?>">Contactos</a>
    </nav>
</header>
@yield('contenido')
</body>
</html>