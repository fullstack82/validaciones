<!DOCTYPE html>
<html lang="es">

<head>
    <title>Validaciones de formularios en PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Validar formularios en php</h1>
    <?php 
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == 'faltan_valores'){
            echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
        }
        if($error == 'nombre'){
            echo '<strong style="color:red">Introduce bien el nombre</strong>';
        }
        if($error == 'apellidos'){
            echo '<strong style="color:red">Los apellidos no son correctos</strong>';
        }
        if($error == 'edad'){
            echo '<strong style="color:red">Introduzca una edad correcta</strong>';
        }
        if($error == 'email'){
            echo '<strong style="color:red">Introduce un mail valido</strong>';
        }
        if($error == 'password'){
            echo '<strong style="color:red">Introduce una contraseña de más de 5 letras</strong>';
        }
    }
    ?>


    <form method="POST" action="procesar_formulario.php">

        <label for="nombre">Nombre</label><br />
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br />

        <label for="apellidos">Apellidos</label><br />
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br />

        <label for="edad">Edad</label><br />
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br />

        <label for="email">Email</label><br />
        <input type="email" name="email" required="required"><br />

        <label for="pass">Password</label><br />
        <input type="password" name="pass" required="required" minlength="5"><br />


        <input type="submit" value="Enviar">
    </form>
</body>

</html>