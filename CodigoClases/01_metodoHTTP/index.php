<?php
#este es un comentario

#impresion en pantalla
print "Esta es una prueba de impresion";
echo "<br>";
echo "Esta es una prueba de impresion con echo";

#variables
$pais = "Ecuador"; #PHP ES UN LENGUAJE NO TIPADO
$numero = "2023";
print "<br>";
echo $pais . "Es un pais rico y diverso. El " . $pais . " del " . $numero;

#arreglos
echo "<br>";
$estadoCivil = array("soltero", "casado", "divorciado", "viudo");
echo "<br>";
print_r($estadoCivil);
echo "<br>";
echo $estadoCivil[0];

$estadoCivilConClave = array("clave1" => "soltero", "clave2" => "casado", "clave3" => "divorciado", "clave4" => "viudo");
print_r($estadoCivilConClave);
echo "<br>";
echo $estadoCivilConClave["clave2"]
?>