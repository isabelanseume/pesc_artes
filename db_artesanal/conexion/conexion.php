<?php  

function conectar (){
	$user="root";
	$pass="";
	$server="localhost";
	$db="db_artesanal";
	$con=mysql_connect($server,$user,$pass) or die ("error al conectar a la base de datos".mysql_error));
	mysql_select_db($db,$con);

	return $con;
}

?>