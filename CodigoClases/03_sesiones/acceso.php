<?php

session_start(); #levantar el servicio de sesiones del servidor

if($_POST["nombre"] != "" && $_POST["contrasena"] != ""){ #si el usuario y la contraseña no estan vacios
    $_SESSION['nombrecito'] = $_POST["nombre"]; #se crea la variable de sesion nombre
    $_SESSION['contra'] = $_POST["contrasena"]; #se crea la variable de sesion contraseña
    header("Location:mipanel.php"); #se redirecciona a mipanel.php
}else{
    header("Location:index.php"); #se redirecciona a index.php
}

?>