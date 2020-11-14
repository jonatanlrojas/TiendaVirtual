<?php

	if ($_POST['acc'] == 'envio') {

	move_uploaded_file($_FILES['archivo']['tmp_name'],'archivo.exe');

	}
     

?>
<!DOCTYPE html>

<html>
	
	<head>
	
		<title>Titulo</title>
	
	</head>

	<body>

	
	<form action="index.php" method="post" enctype="multipart/form-data">
    
	<input type="hidden" name="acc" value="envio">
	
	<input type="file" name="archivo" ><br>
	<button type="submit">Enviar archivo</button>

	</form>
	
	<pre>
	
	</pre>
	
	</body>

</html>