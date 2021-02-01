<!DOCTYPE html>
<html lang="es">

<head>
    <title>Validaciones de formularios en PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Validar formularios en php</h1>
    <form method="POST" action="procesar_formulario.php">

    <label for="nombre">Nombre</label><br />
    <input type="text" name="nombre"><br />

    <label for="apellidos">Apellidos</label><br />
    <input type="text" name="apellidos"><br />

    <label for="edad">Edad</label><br />
    <input type="number" name="edad"><br />

    <label for="email">Email</label><br />
    <input type="email" name="email"><br />

    <label for="pass">Password</label><br />
    <input type="password" name="pass"><br />


    <input type="submit" value="Enviar">
    </form>
</body>

</html>