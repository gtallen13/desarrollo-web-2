<!DOCTYPE >
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width= device-width">
        <title>@yield('Titulo')</title>

        <style>
            body{background-color: aqua}
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/portafolio">Portafolio</a></li>
                <li><a href="/contactos">Contactos</a></li>
            </ul>
        </nav>    
            <h1>
                Bienvenido <?php echo $nombre ?? " invitado" ?>
            </h1>
        @yield('Contenido')
    </body>
</html>
