<?php
$nombre = $clave = $sexo = "";
$esHombre = $esMujer =$preferencias = false;

if (isset ($_COOKIE["c_recordarme"]) && $_COOKIE["c_recordarme"] !=""){
    $preferencias = true;
    $nombre = isset ($_COOKIE["c_nombre"]) ? $_COOKIE["c_nombre"] :"";
    $clave = isset ($_COOKIE["c_clave"]) ? $_COOKIE["c_clave"] :"";
    $sexo = isset ($_COOKIE["c_sexo"]) ? $_COOKIE["c_sexo"] :"";

    if($sexo !=""){
        $esHombre = ($sexo =="h")? true:false;
        $esMujer = ($sexo =="m")? true:false;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=d, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="panel.php">
        <fieldset>
            Usuario*=<br>
            <input type="text" value="<?php echo $nombre?>" name="usuario" required/><br>
            Contraseña*=<br>
            <input type="password" value="<?php echo $clave?>" name="contraseña" required/><br>
            Sexo*=<br>
            <input type="radio" name="hm" value="h" <?php echo ($esHombre)?"checked": "" ?> required>Hombre
            <input type="radio" name="hm" value="m" <?php echo ($esMujer)?"checked": "" ?> required>Mujer
            <br>
            <input type="checkbox" name="chkRecordame" <?php echo ($preferencias)?"checked" : "" ?>> Recordarme?
            <br>

            <input type="submit" value="Ingresar">
        </fieldset>
    </form>
</body>
</html>