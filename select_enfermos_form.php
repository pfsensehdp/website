<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="estilo.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<header>
	<?php 
		$conex=require("conect_select.php");
		$consulta="SELECT * FROM enfermos";

		if (!$resultado = $mysqli->query($consulta)) {
    		echo "Lo sentimos, este sitio web está experimentando problemas.";
    		echo "Error: La ejecución de la consulta falló debido a: \n";
    		echo "Query: " . $consulta . "\n";
    		echo "Errno: " . $mysqli->errno . "\n";
    		echo "Error: " . $mysqli->error . "\n";
    	exit;
 }
		 ?>

		 <div id="div1">
		 	<img id="cruzroja" src="cruzroja.png" width="265" height="258" alt=""/>
		 	<p id="titulo">URGENCIAS</p>
		 </div>
</header>
	
<nav>
    <ul>
      <li><a href="insert_form.html">Ingresar</a></li>
      <li><a href="select_enfermos_form.php">Ingresos</a></li>
      <li><a href="select_hospitales_form.php">Hospitales</a></li>
      <li><a href="delete.html">Retirar</a></li>
    </ul>
  </nav>
		
  <body>
    <table id="tabla" border="2" cellpadding="2" cellspacing="0">
    	<tr>
    		<th colspan="10">
    			INGRESOS TOTALES
    		</th>
		</tr>
    	<tr>
    		<th>
    			C&oacute;digo
			</th>
      <th>
          C&oacute;digo hospital
      </th>
      <th>
          Nombre
      </th>
      <th>
          Apellidos
      </th>
    		<th
    			>Direcci&oacute;n
			</th>
    		<th>
    			Tel&eacute;fono
			</th>
			<th>
				Ciudad
			</th>
			<th>
				Provincia
			</th>
      <th>
          Fecha de nacimiento
      </th>
      <th>
          Enfermedad/síntomas
      </th>
		</tr>
    <?php

    while ($fila = $resultado->fetch_assoc()) {
      echo ("<tr><td>".$fila["cod_enfermo"]."</td>");
      echo ("<td>".$fila["cod_hospital_enfermos"]."</td>");
      echo ("<td>".$fila["nombre_enfermo"]."</td>");
      echo ("<td>".$fila["apellidos_enfermo"]."</td>");
      echo ("<td>".$fila["direccion_enfermo"]."</td>");
      echo ("<td>".$fila["telefono_enfermo"]."</td>");
      echo ("<td>".$fila["ciudad_enfermo"]."</td>");
      echo ("<td>".$fila["provincia_enfermo"]."</td>");
      echo ("<td>".$fila["fechnac_enfermo"]."</td>");
      echo ("<td>".$fila["enfermedad_enfermo"]."</td></tr>");
    }
	?>
    </table>
  </body>
</html>