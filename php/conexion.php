<?php
$link=mysql_connect("localhost","root","");

if (!$link){
		die ("Error de conexion ".mysql_error());
	}

mysql_select_db("tiendaonline", $link) or die ("Error al conectar con la base de datos". mysql_error());

function cerrarconexion() {
	mysql_close($GLOBALS['link']);
	}

?>