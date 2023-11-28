<?php
session_start(); #levantar el servicio de sesiones del servidor
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login de Ejemplo de mi Sitio</h1>
    <form action="acceso.php" method="POST">
        <fieldset>
            Usuario<br>
            <input type="text" name="nombre" ><br>
            Contraseña<br>
            <input type="password" name="contrasena" ><br>

            <input type="submit" value="Ingresar">


        </fieldset>
    </form>
</body>
</html>