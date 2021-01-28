<?php 
require ("use_create_tables.php");

$deletecode=$_REQUEST["deletecode"];


$consulta ="DELETE FROM `enfermos` WHERE cod_enfermo=$deletecode;";

if (!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  } 
 ?>