<?php
session_start(); #levantar el servicio de sesiones del servidor
if(!isset($_SESSION['nombrecito'])&& !isset($_SESSION['contra'])){ #si existe la variable de sesion nombre y la variable de sesion contraseña
    header("Location:index.php"); #redireccionar a mipanel.php
}
session_destroy(); #destruir la sesion
header("Location:index.php"); #redireccionar a index.php


?>