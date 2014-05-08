<?php
$servidor="sql307.260mb.net";
$usuario="n260m_14545460";
$contrasena="jovany1";
$baseDatos="n260m_14545460_autos1";

$con=mysql_connect($servidor,$usuario,$contrasena) or die ("Error de Conexxion".mysql_error());

mysql_select_db($baseDatos, $con);
?>