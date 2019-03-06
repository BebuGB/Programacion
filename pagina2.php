<?PHP
//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión incorrectamente se envia al login
if (!$_SESSION){
	header("location:index.html");	
}
//Validar si la cookie está activa
 if(isset($_COOKIE['login'])){ 
	// Cookie creada y activa
}else{ 
	//cookie destruida, cierra la sesion y manda al login
	session_destroy();
	echo "<center><h2><a><i>El tiempo se acabo</a></i></h2><br>" . $_SESSION['GMAIL'];
	echo "<a href=login.php>Ir al login </a></center>";
	exit;// Salimos corriendo (evita que se siga ejecutan do los códigos siguiente)
}

ECHO "<center><h2>Esta pagina no esta disponible<h2>" . $_SESSION['GMAIL'];

?>