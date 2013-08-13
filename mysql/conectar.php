<?php
$conexion = mysql_connect("localhost","usercova","usercova");
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

mysql_select_db("bdwebcova",$conexion);
//$sql= "CREATE TABLE Noticias (Nombre())"


//ejecuto esta peticion
//
//
//mysql_close();
?>