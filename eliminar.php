
<?php

	require 'conexion.php';
	$IDEE = $_POST["IDE"];	
	
	
	$sql="DELETE FROM autos WHERE (idAuto='$IDEE')";
	
	$resultado=mysql_query($sql,$con);
	
	if($resultado){
		echo "Todos tus registros se eliminarón de manera correcta";
	}else{
		echo "Los registros no se pudieron eliminar".mysql_error();
		}
	mysql_close($con);
?>