<?php 
require ("use_create_tables.php");

$codigo=$_REQUEST["codigo"];
$nombre=$_REQUEST["nombre"];
$apellidos=$_REQUEST["apellidos"];
$direccion=$_REQUEST["direccion"];
$telefono = $_REQUEST["telefono"];
$ciudad = $_REQUEST["ciudad"];
$provincia = $_REQUEST["provincia"];
$fechnac=$_REQUEST["fechnac"];
$enfermedad=$_REQUEST["enfermedad"];
$codigohospital=$_REQUEST["codigohospital"];

$consulta ="INSERT INTO enfermos (cod_enfermo, nombre_enfermo,apellidos_enfermo,direccion_enfermo,telefono_enfermo,ciudad_enfermo,provincia_enfermo,fechnac_enfermo,enfermedad_enfermo,cod_hospital_enfermos) VALUES ('$codigo','$nombre','$apellidos','$direccion','$telefono','$ciudad','$provincia','$fechnac','$enfermedad','$codigohospital');";

if (!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  } 
 ?>