<?php
//1. Recibimos los datos enviados desde el formulario
$email= $_POST['usu'];
$password= $_POST['cla'];

//2. Si la variable $email est� llena isset=True entonces
if(isset($email)){
 
//3. Proceso de conexi�n con la base de datos
	require("conex.php");
	$conex = conexion();
	
	
	//4. Consultar si los datos son est�n guardados en la base de datos
	$consulta= "SELECT * FROM jugardores WHERE GMAIL='$email' AND Clave='$password'"; 
	//5. Aplico el query
	$resultado= mysqli_query($conex,$consulta) or die (mysqli_error());
	//6. Convertir resultados en arreglo
	$fila=mysqli_fetch_array($resultado);//Coloco el resultado en el arreglo fila
	
	//OPCI�N 1: Si el usuario NO existe o los datos son INCORRRECTOS
	if (!$fila['GMAIL']){ //Si NO hay nada en el campo GMAIL del arreglo llamado fila
		header("location:index.html");	
	}
	//OPCI�N 2: Usuario logueado correctamente
	else{
	//Inicio de variables de sesi�n
	session_start();

	//Definimos las variables de sesi�n y redirigimos a la p�gina de usuario
		$_SESSION['GMAIL'] = $fila['Apodo'];
		$_SESSION['nombre'] = $fila['Juego_favorito'];
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//CREAR COOKIE PARA CONTROLAR EL TIEMPO DE LA SESI�N
		if(isset($_COOKIE['login'])){//Si existe -> no pasa nada (se pudo negar la instruccion con !){ 
			//Cookie creada
		}else{//si no existe 
			//Creamos la COOKIE con el tiempo de duraci�n, en este ejemplo 60seg = 1 minuto
			setcookie('login', 1, time() + 2000000); 
		} 
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.	
		header("Location:pagina_usuario.php");//-->Se va hacia la p�gina deseada
	}
	mysqli_close($idcone);	
}
else{//Si la variable $email est� vacia isset=false entonces se envia al login
	header("location:index.html");// env�o al login
}

?>