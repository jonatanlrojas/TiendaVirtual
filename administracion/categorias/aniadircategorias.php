<?php
session_start();

if(isset($_SESSION['administrador'])) {
	
	if($_POST['categoria']!=""){
		include('../../php/conexion.php');
	
		$categoria=utf8_decode($_POST['categoria']);
		$registros=mysql_query("select categoria from categorias where categoria='$categoria'");
		if(mysql_num_rows($registros)==0){
			mysql_query("insert into categorias (categoria) values('$categoria')");
			cerrarconexion();
			header('location:formaniadircategorias.php?alert=1&categoria='.$categoria);
		}
		else {
				header('location:formaniadircategorias.php?alert=3&categoria='.$categoria);			
		}
	
	}
	else if($_POST['categoria']==""){
		header('location:formaniadircategorias.php?alert=2');
	}

}
	
else {
		header('location:../index.html');

}


?>