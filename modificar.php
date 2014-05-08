<?php

require 'conexion.php';
$IDCARR = $_POST['IDCAR'];
$marca1=$_POST['Marca1'];
$modelo1=$_POST['Modelo1'];
$color1=$_POST['Color1'];
$precio1=$_POST['Precio1'];

	
	$sql="UPDATE autos SET idAuto='$IDCARR', marca='$marca1', modelo='$modelo1', color='$color1', precio='$precio1' WHERE idAuto='$IDCARR' ";
	
	$resultado=mysql_query($sql,$con);
	
	if($resultado){
		echo "Los datos se actualizaron correctamente";
		}
	else{
		echo "Los datos no se pudieron actualizar".mysql_error();		
		}
		
		mysql_close($con);
?>