<?php
//ejemplo de conexión mysqli
function conexion(){
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$basededatos="juegos";
	$idcone=mysqli_connect($servidor,$usuario,$clave,$basededatos) or die("Error al conectar al Servidor");
	$idcone->set_charset("utf8");	//-->esto hace que mysqli muestre los acentos y las ñ
	return $idcone;
}
?>
