<?php

require ("conect_select.php");
require ("create_database.php");

$basedatos="emergencias";
mysqli_select_db($mysqli,$basedatos);

// Tabla hospital
$consulta="CREATE TABLE IF NOT EXISTS hospital ";
$consulta.="(cod_hospital VARCHAR(10),";
$consulta.="direccion_hospital VARCHAR(30), ";
$consulta.="telefono_hospital VARCHAR(9), ";
$consulta.="ciudad_hospital VARCHAR(15), ";
$consulta.="provincia_hospital VARCHAR(10), ";
$consulta.="PRIMARY KEY (cod_hospital)); ";



if (!$resultado=$mysqli->query($consulta)){
  echo "Lo siento...fallo algo";
  echo "Num error: ".$mysqli->errno."<br>";
  echo "Error: ".$mysqli->error."<br>";
  exit;

}

// Tabla enfermos	
$consulta="CREATE TABLE IF NOT EXISTS enfermos ";
$consulta.="(cod_enfermo VARCHAR(10),";
$consulta.="cod_hospital_enfermos VARCHAR(10),";
$consulta.="nombre_enfermo VARCHAR(30), ";
$consulta.="direccion_enfermo VARCHAR(30), ";
$consulta.="telefono_enfermo VARCHAR(9), ";
$consulta.="ciudad_enfermo VARCHAR(15), ";
$consulta.="provincia_enfermo VARCHAR(10), ";
$consulta.="apellidos_enfermo VARCHAR(30), ";
$consulta.="fechnac_enfermo DATE, ";
$consulta.="enfermedad_enfermo VARCHAR(30), ";
$consulta.="PRIMARY KEY (cod_enfermo), FOREIGN KEY (cod_hospital_enfermos) REFERENCES hospital(cod_hospital));";

if (!$resultado=$mysqli->query($consulta)){
  echo "Lo siento...fallo algo";
  echo "Num error: ".$mysqli->errno."<br>";
  echo "Error: ".$mysqli->error."<br>";
  exit;

}

?>