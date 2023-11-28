<?php
session_start(); #levantar el servicio de sesiones del servidor
if(!isset($_SESSION['nombrecito'])&& !isset($_SESSION['contra'])){ #si existe la variable de sesion nombre y la variable de sesion contraseña
    header("Location:index.php"); #redireccionar a mipanel.php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Mi experiencia</h1>
    <h3>Usuario Logeado: <?php echo $_SESSION["nombrecito"] ?></h3>
    <hr>
    <h2>Menu</h2>
    <ul>
        <li><a href="acercade.php">Acerca de: </a></li>
        <li><a href="experiencia.php">Mi experiencia </a></li>
    </ul>
    <hr>
    <p><a href="cerrarsesion.php">Cerrar Sesion</a></p>
</body>
</html>