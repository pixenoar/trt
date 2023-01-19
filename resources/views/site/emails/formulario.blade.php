<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario de Contacto</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Inter', sans-serif;
                line-height: 2rem;
            }
        </style>
    </head>
    <body>
        <b>¡Nuevo Mensaje!</b><br>
        Se ha enviado un mensaje desde el formulario de contacto de la página web.
        <br><br>
        <b>Nombre:</b> {{ $nombre }}<br>
        <b>Teléfono:</b> {{ $telefono }}<br>
        <b>Correo Electrónico:</b> {{ $email }}<br>
        <b>Mensaje:</b> {{ $mensaje }}
    </body>
</html>