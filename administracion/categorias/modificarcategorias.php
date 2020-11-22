<?php
session_start();

if(isset($_SESSION['administrador'])) {
	
	if($_POST['categorianueva']!=""){
		include('../../php/conexion.php');
	
		$categorianueva=utf8_decode($_POST['categorianueva']);
		$categoriavieja=utf8_decode($_POST['categoriavieja']);
		$registros=mysql_query("select categoria from categorias where categoria='$categorianueva'");
		if(mysql_num_rows($registros)==0){
			mysql_query("update categorias set categoria='$categorianueva' where categoria='$categoriavieja'");
			cerrarconexion();
			header('location:formaniadircategorias.php?alert=4&categoriavieja='.$categoriavieja.'&categorianueva='.$categorianueva);
		}
		else {
				header('location:formaniadircategorias.php?alert=3&categoria='.$categorianueva);			
		}
	
	}
	else if($_POST['categoria']==""){
		header('location:formaniadircategorias.php?alert=5');
	}

}
	
else {
		header('location:../index.html');

}


?>