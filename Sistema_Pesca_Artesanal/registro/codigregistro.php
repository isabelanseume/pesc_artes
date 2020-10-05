<?php
require_once"conexion.php";

//definir variables e iniciar con valores vacios

$ username = $ password = $ email = "";
$ username_err = $ password_err = $ email_err = "";

//trabajando con el loguin

if ($_SERVER["REQUEST_METHOD"]==="POST") {

	//validacion de input nombre de usuario

	if (empty(trim($_POST["username"]))) {
		$ username_err = "Ingresar nombre de usuario";

	} 
		else{
//preparando declaracion de seleccion
			
	}
}

?>