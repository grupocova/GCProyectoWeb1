<?php
$conexion = mysql_connect("127.0.0.1","root","","prueba");
if(!$conexion){
	die('no eh podido conectar: '.mysql.error());
	
	}
/*
if(mysql_query("CREATE DATABASE primeraBase", $conexion))
echo "se ha creado la base de datos";

else{
	echo "no se ha creado la base de datos".mysql.error();
	}

*/


//Preparo esta peticion

msql_select_db("primerabase",$conexion);
$sql= "CREATE TABLE Noticias (

Nombre())"


//ejecuto esta peticion


mysql_close();
?>