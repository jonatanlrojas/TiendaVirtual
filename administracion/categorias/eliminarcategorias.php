<?php
	session_start();

	if(isset($_SESSION['administrador'])){
		$idcategoria=$_POST['idcategoria'];
		include('../../php/conexion.php');
		mysql_query("delete from categorias where id='$idcategoria'");
		cerrarconexion();
		//header('location:formaniadircategorias.php');
		
		
	
	}
	
	else {
		
		header('location:../index.html');
	}

?>