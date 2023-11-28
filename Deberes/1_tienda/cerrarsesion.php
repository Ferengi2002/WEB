<?php

session_start();
if(!isset($_SESSION["usuario"]) && !isset($_SESSION["contrasena"])){
    header("Location:index.php");
}
session_destroy();
header("Location:index.php");
?>
