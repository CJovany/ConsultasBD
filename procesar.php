<?php

require 'conexion.php';

$marca=$_POST['Marca'];
$modelo=$_POST['Modelo'];
$color=$_POST['Color'];
$precio=$_POST['Precio'];


$sql="INSERT INTO autos (idAuto, marca, modelo, color, precio) values ('','$marca','$modelo','$color','$precio')";

$resultado=mysql_query($sql, $con);

if ($resultado){
	echo "Se ha Realizado el Registro con exito";

	} else {
		die("No se ha realizado el Registro con exito".mysql_error());
		}
?>