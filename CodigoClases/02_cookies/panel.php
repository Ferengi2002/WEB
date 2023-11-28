
<?php
echo var_dump($_POST);

$nombre = $_POST['usuario'];
$clave = $_POST['contraseña'];
$sexo = $_POST['hm'];
$recordarme = isset ($_POST['chkRecordame']) ? $_POST['chkRecordame'] : "";


if($recordarme !=""){
    #Creo la cookie
    setcookie("c_nombre", $nombre, 0);
    setcookie("c_clave", $clave, 0);
    setcookie("c_sexo", $sexo, 0);
    setcookie("c_recordarme", $recordarme, 0);
}else{
    #Borro la cookie si existe
    if (isset($_COOKIE)){
        foreach($_COOKIE as $name => $value){
            #Si el valor de expiracion es 1 o 0, la cookie se borra
            setcookie($name, '', 1);
        }
    }
}


?>
<html>
<head>
</head>
    <body>
        <h1>Panel Principal</h1>
        <h2>Bienvendio: <?php echo $nombre ?></h2>
        <hr>
        <a href="borrarCookies.php?borrar=1">Borrar Cookies y regresar</a>
        <br>
        <a href="borrarCookies.php?borrar=0">Regresar</a>
    </body>
</html>