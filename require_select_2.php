<?php
  $servidor="localhost";
  $usuario="root";
  $clave=""; 


@$mysqli = new mysqli($servidor,$usuario,$clave);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error. " ". $mysqli->connect_errno ;
    die (" SALIDA DEL PROGRAMA. Error acceso a BBDD");
}
else  echo ("SE HA CONECTADO AL SERVIDOR MySQL.");
require ("insert_form.html");
$basedatos="emergencias";
mysqli_select_db($mysqli,$basedatos);
?>