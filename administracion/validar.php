<?php
session_start();

if(!isset($_SESSION['administrador'])) {
	if($_POST['nombre']=="admin" && $_POST['password']=="123") {
	
	$_SESSION['administrador']=$_POST['nombre'];
	
	}	
	
}



if (isset($_SESSION['administrador'])){

	echo "Hola ".$_SESSION['administrador'];
	
	echo "<a href='categorias/formaniadircategorias.php'>Aniadir/modifcar/eliminar Categorias</a>";
	

	
	
	
	
}
	else {
		header('location:index.html');

	}


?>