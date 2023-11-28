<?php
#borrarcookie.php?borrar=1

if($_GET['borrar'] == 1) {
    #Borre y regrese a login
    setcookie("c_nombre",'');
    setcookie("c_clave",'');
    setcookie("c_sexo",'');
    setcookie("c_recordarme",'');
}
    #navego a la pagina principal
    header("Location: index.php")

?>