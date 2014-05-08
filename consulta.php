<?php

require 'conexion.php';


$sql="SELECT idAuto, marca, modelo, color, precio FROM autos";

$resultado=mysql_query($sql, $con);

if ($resultado){
	$datos=array();
	$i=0;	
	while ($fila=mysql_fetch_assoc($resultado)){
		$datos[$i]=$fila;
		$i++;
		}

	} else {
		echo "No se ha realizado el Registro con exito".mysql_error();
		}
  mysql_close($con);
  
  echo json_encode($datos);
?>