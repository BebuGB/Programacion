<?php 
session_start();
//simplemente verificamos si la variable de secion nombre está llena, en tal caso se destruye (cierra) y enviamos al login
if($_SESSION['nombre']){	
	session_destroy();
	header("location:index.html");
	//borramos la cookie
	setcookie('login', 1, time() - 42000); //se borra creandola nuevamente pero con un tiempo menor
}else{
	setcookie('login', 1, time() - 42000); //se borra creandola nuevamente pero con un tiempo menor
	header("location:index.html");
}
?>
