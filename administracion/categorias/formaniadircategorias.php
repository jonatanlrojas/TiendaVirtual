<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>

<?php if (isset($_SESSION['administrador'])){?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"utf-8" />
<title>Tienda Online</title>
<link rel="stylesheet" href="../../css/estilos.css">
<link rel="stylesheet" href="../../css/normalizar.css">
<link rel="stylesheet" href="../administracion.css">


<!-- bootstrap-->
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../../javascript/bootstrap.min.js"></script>

<!-- bootstrap-->

<script>
	function eliminar(id){
    	if(confirm("Se eliminará la categoria con todos los productos, ¿Confirma su eliminación?")){
        
        	//location.href="eliminarcategorias.php?idcategoria="+id;
            $.ajax({
            	type:"POST",
                url:"eliminarcategorias.php",
                data:'idcategoria='+id
            
            });
            $("#"+id).hide("slow");
            
    	}
    }
</script>

</head>

<body>

<?php 
$alert=$_GET['alert'];	

if(isset($alert)) {

	switch ($alert){
		
		case 1:
	
?>


<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <p class="centrar"><strong>Bien!</strong> La categoria <strong><?php echo utf8_encode($_GET['categoria']); ?></strong> se ha agregado correctamente.</p>
</div>
<?php 
		break;
		case 2:
?>	
		<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p class="centrar">No has agregado ninguna categoria</p>
		</div>
<?php
		break;
		case 3:
?>
		<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p class="centrar">La categoria <strong><?php echo utf8_encode($_GET['categoria']); ?></strong> ya existe en nuestra base de datos</p>
		</div>

<?php
	break;
	case 4:
?>

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p class="centrar"><strong>Bien!</strong> La categoria <strong><?php echo utf8_encode($_GET['categoriavieja']);?></strong> se ha actualizado correctamente por <strong><?php echo utf8_encode($_GET['categorianueva']); ?></strong></p>
</div>

<?php
	break;
	case 5:


?>
		<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p class="centrar">No has actualizado ninguna categoria</p>
		</div>
        

<?php

	break;
	
}
}

?>

<div class="tcat"><strong>AÑADIR CATEGORIAS</strong></div>
<div class="formulario">
<form class="form-horizontal" method="post" action="aniadircategorias.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Categoria" name="categoria">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Añadir</button>
    </div>
  </div>
</form>
</div>
<div class="mostrarcat">
<?php
 include('../../php/conexion.php');
 $registros=mysql_query("select * from categorias order by id desc");
 cerrarconexion();
?>	
<table class="table table-hover">
<?php
while ($fila=mysql_fetch_array($registros)){
?>
<tr class="active" id=<?php echo $fila['id']; ?>>
<td><strong><?php echo utf8_encode($fila['categoria']);?></strong></td>
<td><a href="formmodificarcategorias.php?categoriavieja=<?php echo utf8_encode($fila['categoria']); ?>"><button type="button" class="btn btn-success">Editar</button></a></td>
<td><a onclick="eliminar('<?php echo $fila['id']; ?>')"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
</tr>
<?php	
		}
	
?>
</table>


</div>
</body>
</html>

<?php } 


	else {
		header('location:../index.html');

	}

?>

