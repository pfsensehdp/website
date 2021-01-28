<?php

$consulta ="CREATE DATABASE IF NOT EXISTS emergencias";

if (!$resultado = $mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  }
	
?>